        <main class="w3-margin">     
                <table class="w3-container w3-card w3-center w3-table w3-border">
                    <tr class="w3-grey">
                            <th>Item</th>
                            <th>Experation Date</th>
                            <th>Opened?</th>
                            <th> </th>

                    </tr>
                                
                    <?php
                        for ($i = 0; $i < sizeOf($pantryData); $i++) {
                            echo '<tr class="w3-border">';

                            echo "<td>";
                            echo $pantryData[$i]["Name"];
                            echo "</td>";


                            echo "<td>";
                            echo $pantryData[$i]["ExpDate"];
                            echo "</td>";


                            echo "<td>";
                            echo $pantryData[$i]["Opened"];
                            echo "</td>";
                                                
                            echo "<td>";
                            echo '<div><button class="w3-red w3-btn">Delete</button> <button class="w3-green w3-btn">Update</button></div>';
                            echo "</td>";


                            echo "</tr>";
                        }

                    ?>
                    
                </table>

                
                
                <span class="w3-container w3-right">
                    <button id="add" class="w3-button w3-circle w3-blue">+</button>
                </span>
                
        </main>