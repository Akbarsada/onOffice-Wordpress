<?php

	$sitemapConfig = [
		
		(object) [
			'path'    => rtrim($_SERVER['DOCUMENT_ROOT'] . '/') . '/sitemap-realestate.xml',
			'source'  => [
				(object) [
					'type' => 'estates',
					'base' => 'https//' . $_SERVER['HTTP_HOST'] . '/immobilien/'
				],
				(object) [
					'type' => 'estates_en',
					'base' => 'https//' . $_SERVER['HTTP_HOST'] . '/en/real-estate/'
				]
			]
		],
		
		(object) [
			'path'  => rtrim($_SERVER['DOCUMENT_ROOT'] . '/') . '/sitemap-project.xml',
			'source'  => [
				(object) [
					'type' => 'projects',
					'base' => 'https//' . $_SERVER['HTTP_HOST'] . '/projekte/'
				],
				(object) [
					'type' => 'projects_en',
					'base' => 'https//' . $_SERVER['HTTP_HOST'] . '/en/projects/'
				]
			]
		]
	
	];
	
	
	function createSitemap($sitemap) {
		$xmlIn = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\t<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">";
		$xmlOut = '</xml>';
		$tmpl = "\t\t<url>\n\t\t\t<loc>{{ URL }}</loc>\n\t\t\t<changefreq>weekly</changefreq>\n\t\t\t<lastmod>{{ DATE }}</lastmod>\n\t\t\t<priority>0.6</priority>\n\t\t</url>";
		$items = [ $xmlIn ];
		
		foreach($sitemap->source as $source) {
			$posts = get_posts([
				'numberposts' => -1,
        'post_type'   => $source->type
			]);
			
			foreach($posts as $post) {
				$items[] = str_replace([
					'{{ URL }}',
					'{{ DATE }}'
				], [
					$source->base . $post->post_name . '-' . $post->ID,
					date('c', strtotime($post->post_modified))
				], $tmpl);
			}
		}
		
		$items[] = $xmlOut;
		
		file_put_contents($sitemap->path, implode("\n", $items));
	}
	
	
	function createSitemaps() {
		global $sitemapConfig;
		
		foreach($sitemapConfig as $sitemap) {
			createSitemap($sitemap);
		}
	}

?>