<!-- The modal to add in an item to the pantry, hidden by default -->
<div id="editModal" class="w3-modal" style="display:none;">
    <div class="w3-modal-content w3-animate-opacity">

        <span><h1 class="w3-center w3-blue">Update Food Item</h1></span>

        <div class="w3-margin">
            <form class="w3-form" action="/ItemActions/updateItem/<?php if(isset($id)) { echo $id; } ?>" method="post">
                <div class="w3-container">
                    <div class="w3-section">
                        <label for="productName">Name<label>
                        <input type="text" class="w3-rest w3-input" id="productName" name="form[productName]" value="<?php if (isset($form)){echo $form['productName'];} ?>" required>
                    </div>

                    <div class="w3-section w3-border">
                        <div class="w3-margin-left">
                            <label for="opened">Opened?<label>
                            
                            <div>
                                <input type="radio" name="form[productOpen]" id="productOpenT" value="true">
                                <label for="productOpenT">Yes</label>
                            </div>
                                                    
                            <div>
                                <input type="radio" name="form[productOpen]" id="productOpenF" value="false">
                                <label for="productOpenF">No</label>
                            </div>
                        </div>
                        
                    </div>

                    <div class="w3-section">
                        <label for="experationDate">Experiation Date<label>
                        <input  type="date" class="w3-rest w3-input" name="form[experationDate]" value="<?php if (isset($form)){echo $form['experationDate'];} ?>"required>
                    </div>
                </div>
                
                <div class="w3-section">
                    <button type="submit" class="w3-green w3-btn">Submit</button>
                    <button id="editCloseButton" class="w3-btn w3-red w3-ripple">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>