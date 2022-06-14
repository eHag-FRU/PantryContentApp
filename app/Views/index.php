        <main class="w3-margin">     
                <table class="w3-container w3-card w3-center w3-table w3-border">
                    <tr class="w3-grey">
                            <th>Item</th>
                            <th>Experation Date</th>
                            <th>Opened?</th>
                            <th> </th>

                    </tr>
                                
                    <?php foreach($pantryData as $item): ?>
                    <tr class="w3-border">
                        <td><?= $item['Name'] ?></td>
                        <td><?= $item['ExpDate'] ?></td>
                        
                        <td>
                            <?php 
                                switch($item['IsOpen']) {
                                    case true:
                                        echo "Yes";
                                        break;
                                    default:
                                        echo "No";
                                        break;
                                }
                            ?>
                        </td>
                        
                        <td>
                            <div>
                                <a class="w3-red w3-btn" href="/ItemActions/deleteItem/<?= $item['Item_ID'] ?>">Delete</a> 
                                <a id="update" class="w3-green w3-btn w3-margin-top" href="/ItemActions/openUpdate/<?= $item['Item_ID'] ?>">Update</a>
                            </div>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                </table>


                <span class="w3-container w3-right add" >
                    <button id="add" class=" w3-button w3-large w3-circle w3-blue" style="z-index: 100; float: right; position: fixed; bottom: 20px; right: 30px;">+</button>
                </span>
                
        </main>