<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>

        <link rel="stylesheet" href ="<?php echo base_url(); ?>bootstrap/css/bootstrap.css" />
    </head>

    <body>
      <div class="container">
      <h1> <?php echo $title ?> </h1>

<form method="post" action="<?php echo base_url(); ?>index.php/salesperson_controller/addTransaction">
<div class = "well">



        <div class="row">
<span class = "text-danger"><?php echo validation_errors(); ?></span>

                <div class="col-sm-1 form-group-sm">
                    <label for="vat">VAT(%)</label>
                    <input type="number" min="0" max="100" class="form-control" value="0" name="vat" >
                </div>



                <div class="col-sm-1 form-group-sm">
                    <label for="discount">Discount(%)</label>
                    <input type="number" min="0" max="100" class="form-control" value="0" name="discount">
                </div>




                <div class="col-sm-3 form-group-sm">
                    <label for="cumAmount">Total Amount</label>
                    <span  class="form-control" name= "total_ammount">0</span>
                </div>


                <div class="col-sm-3 form-group-sm">
                    <label for="amountTendered" >Amount Given</label>
                    <input type="number" min="0" class="form-control" placeholder= "Ammount Given" name = "ammount_given">

                </div>


                <div class="col-sm-3 form-group-sm">
                    <label for="changeDue">Change Due</label>
                    <span class="form-control" name = "change_due"></span>
                </div>


            </div>

            <div class="row">
              <br/><br/>
                <div class="col-sm-3 form-group-sm">
                    <label for="custName">Customer Name</label>
                    <input type="text"  class="form-control" placeholder="Name" name="customer_name">

                </div>

                <div class="col-sm-3 form-group-sm">
                    <label for="custPhone">Customer Phone</label>
                    <input type="tel" class="form-control" placeholder="Phone Number" name="phone_number">

                </div>

                <div class="col-sm-3 form-group-sm">
                    <label for="custEmail">Customer TIN NO </label>
                    <input type="number"  class="form-control" placeholder="Customer TIN" name="customer_tin">

                </div>
            </div>



            <div class="col-sm-4 form-group-sm">
            <br/><br/>
                                            <button type="button" class="btn btn-success btn-sm" id="confirmSaleOrder">Notify Stock Manager</button>

                                            <input type="submit" name="insert" value = "Add Transaction" class="btn btn-primary btn-sm" />
                                            <button type="button" class="btn btn-danger btn-sm" id="hideTransForm">Clear</button>
                                        </div>






</div>
  </form>

  </div>

  <script>$("#clickToClone").on('click', function(e){
        e.preventDefault();

        var cloned = $("#divToClone").clone();

        //remove the id 'divToClone' from the cloned div
        cloned.addClass('transItemList').removeClass('hidden').attr('id', '');

        //reset the form values (in the cloned div) to default
        cloned.find(".selectedItemDefault").addClass("selectedItem").val("");
        cloned.find(".itemAvailQty").html("0");
        cloned.find(".itemTransQty").val("0");
        cloned.find(".itemTotalPrice").html("0.00");

        //loop through the currentItems variable to add the items to the select input
		return new Promise((resolve, reject)=>{
			//if an item has been selected (i.e. added to the current transaction), do not add it to the list. This way, an item will appear just once.
			//We start by forming an array of all selected items, then skip that item in the loop appending items to select dropdown
			var selectedItemsArr = [];

			return new Promise((res, rej)=>{
				$(".selectedItem").each(function(){
					//push the selected value (which is the item code [a key in currentItems object]) to the array
					$(this).val() ? selectedItemsArr.push($(this).val()) : "";
				});

				res();
			}).then(()=>{
				for(let key in currentItems){
					//if the current key in the loop is in our 'selectedItemsArr' array
					if(!inArray(key, selectedItemsArr)){
						//if the item has not been selected, append it to the select list
						cloned.find(".selectedItemDefault").append("<option value='"+key+"'>"+currentItems[key]+"</option>");
					}
				}

				//prepend 'select item' to the select option
				cloned.find(".selectedItemDefault").prepend("<option value='' selected>Select Item</option>");

				resolve(selectedItemsArr);
			});
		}).then((selectedItemsArray)=>{
			//If the input is from the barcode scanner, we need to check if the item has already been added to the list and just increment the qty instead of
			//re-adding it to the list, thus duplicating the item.
			if($("#barcodeText").val()){
				//This means our clickToClone btn was triggered after an item was scanned by the barcode scanner
				//Check the gotten selected items array if the item scanned has already been selected
				if(inArray($("#barcodeText").val().trim(), selectedItemsArray)){
					//increment it
					$(".selectedItem").each(function(){
						if($(this).val() === $("#barcodeText").val()){
							var newVal = parseInt($(this).closest('div').siblings('.itemTransQtyDiv').find('.itemTransQty').val()) + 1;

							$(this).closest('div').siblings('.itemTransQtyDiv').find('.itemTransQty').val(newVal);

							//unset value in barcode input
							$("#barcodeText").val('');

							return false;
						}
					});
				}

				else{
					//if it has not been selected previously, append it to the list and set it as the selected item
					//then append our cloned div to div with id 'appendClonedDivHere'
					cloned.appendTo("#appendClonedDivHere");

					//add select2 to the 'select input'
					cloned.find('.selectedItemDefault').select2();

					//set it as the selected item
					changeSelectedItemWithBarcodeText($("#barcodeText"), $("#barcodeText").val());
				}
			}

			else{//i.e. clickToClone clicked manually by user
				//do not append if no item is selected in the last select list
				if($(".selectedItem").length > 0 && (!$(".selectedItem").last().val())){
					//do nothing
				}

				else{
					//then append our cloned div to div with id 'appendClonedDivHere'
					cloned.appendTo("#appendClonedDivHere");

					//add select2 to the 'select input'
					cloned.find('.selectedItemDefault').select2();
				}
			}
		}).catch(()=>{
			console.log('outer promise err');
		});

        return false;
    });
  </script>
    </body>

</html>
