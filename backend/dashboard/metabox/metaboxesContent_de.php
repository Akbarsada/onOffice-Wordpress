<?php
$projekt =  new Project($_GET['post']);
$projekt_objekte_post_ids = $projekt->all_objects_of_project($_GET['post']);
echo '<pre>';
print_r(get_post_meta(2501, '_document_array'))

?>

<ul class="collapsible">
    <li>
        <div class="collapsible-header" style="font-weight: bold;">Projekt

        </div>
        <div class="collapsible-body">

            <table>
                <thead>
                <tr>

                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>



                </tr>

                </tbody>
            </table>


            <table>
                <thead>
                <tr>

                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>



                </tr>

                </tbody>
            </table>

            <table>
                <thead>
                <tr>

                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>
                    <th>Infos</th>

                </tr>
                </thead>

                <tbody>
                <tr>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>
                    <td>Infos</td>


                </tr>

                </tbody>
            </table>

        </div>
    </li>
</ul>

<ul class="collapsible">

    <?php foreach($projekt_objekte_post_ids as $projekt_objekte_post_id):
        $current_objekt = new Estate($projekt_objekte_post_id);
        $current_objekt_data = $current_objekt->estate_data($projekt_objekte_post_id);

        ?>
        <li >
            <div class="collapsible-header" ><?php echo get_post_meta($projekt_objekte_post_id, 'objekt_titel', true ); ?>
            </div>
            <div class="collapsible-body">


                <table >
                    <thead>
                    <tr>
                        <th>onOffice ID</th>
                        <th>UUID</th>
                        <th>Post ID</th>





                    </tr>
                    </thead>

                    <tbody>
                    <tr>

                        <td><?php echo $current_objekt_data['_id']; ?></td>
                        <td><?php echo $current_objekt_data['_uuid']; ?></td>
                        <td><?php echo $projekt_objekte_post_id; ?></td>



                    </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                    <tr>
                        <th>Objekt Adresse</th>
                        <th>Anzahl Zimmer</th>
                        <th>Warmmiete</th>
                        <th>Betriebskosten inkl. Ust.</th>
                        <th>Provisionsfrei</th>



                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td><?php echo $current_objekt_data['objekt_adresse']; ?></td>
                        <td><?php echo $current_objekt_data['_anzahl_zimmer']; ?></td>
                        <td><?php echo $current_objekt_data['_warmmiete']; ?> €</td>
                        <td><?php echo $current_objekt_data['_betr_kosten_inkl_ust']; ?> €</td>
                        <td><?php if($current_objekt_data['_provisionsfrei'] == 0){echo '<strong style="color:red;">nein</strong>';}
                            else{echo '<strong style="color:green;">ja</strong>';} ?></td>

                    </tr>
                    </tbody>
                </table>



                <table >
                    <thead>
                    <tr>
                        <th>Wohnfläche</th>
                        <th>Kellerfläche</th>
                        <th>Abstellraum</th>
                        <th>Fahrstuhl</th>
                        <th>Parkmöglichkeit</th>




                    </tr>
                    </thead>

                    <tbody>
                    <tr>

                        <td><?php echo $current_objekt_data['_wohnflaeche']; ?> m²</td>
                        <td><?php echo $current_objekt_data['_kellerflaeche']; ?> m²</td>
                        <td><?php if($current_objekt_data['_abstellraum']){echo '<strong style="color:red;">nein</strong>';}
                            else{echo '<strong style="color:green;">ja</strong>';} ?></td>
                        <td><?php if($current_objekt_data['hat_fahrstuhl']){echo '<strong style="color:red;">nein</strong>';}
                            else{echo '<strong style="color:green;">ja</strong>';} ?></td>
                        <td><?php if($current_objekt_data['hat_parkmoeglichkeit']){echo '<strong style="color:red;">nein</strong>';}
                            else{echo '<strong style="color:green;">ja</strong>';} ?></td>


                    </tr>
                    </tbody>
                </table>


                <table >
                    <thead>
                    <tr>
                        <th>Anzahl Badezimmer</th>
                        <th>Anzahl WC</th>
                        <th>Fahrradraum</th>
                        <th>Balkon</th>
                        <th>Terrasse</th>





                    </tr>
                    </thead>

                    <tbody>
                    <tr>

                        <td><?php echo $current_objekt_data['_anzahl_badezimmer']; ?></td>
                        <td><?php echo $current_objekt_data['_anzahl_sep_wc']; ?></td>
                        <td><?php if($current_objekt_data['_fahrradraum'] == 0){echo '<strong style="color:red;">nein</strong>';}
                            else{echo '<strong style="color:green;">ja</strong>';} ?></td>
                        <td><?php echo $current_objekt_data['_anzahl_balkone']; ?></td>
                        <td><?php echo $current_objekt_data['_anzahl_terrassen']; ?></td>


                    </tr>
                    </tbody>
                </table>




            </div>
        </li>
    <?php endforeach; ?>

</ul>

