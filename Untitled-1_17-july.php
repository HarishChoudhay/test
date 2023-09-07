

<div class="col-md-6 col-12">
    <div class="input-group">
    <select name="type_of_seller">
        <option value=''>Buisness Category </option>
        <?php foreach ($data as $key => $value) { ?>

    
        <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
    <?php } ?>
    </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>
here in options when i select option value = investors then add d-none class on the Product Details Page button 


<div class="input-group">
    <button type="submit" class="btn btn-primary " name="complete" value="complete"><?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Complete' ?></button>
    <button type="submit" class="btn btn-primary " name="product" value="product"><?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Product Details Page' ?></button>
</div>




<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller" onchange="toggleProductButton(this)">
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>

<script>
    function toggleProductButton(select) {
        var productButton = document.getElementsByName('product')[0];
        if (select.value === 'investors') {
            productButton.classList.add('d-none');
        } else {
            productButton.classList.remove('d-none');
        }
    }
</script>

<div class="input-group">
    <button type="submit" class="btn btn-primary" name="complete" value="complete">
        <?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Complete' ?>
    </button>
    <button type="submit" class="btn btn-primary d-none" name="product" value="product">
        <?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Product Details Page' ?>
    </button>
</div>






<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller" id="type_of_seller">
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValue = $(this).val();
            var productButton = $('button[name="product"]');
            
            if (selectedValue === 'investors') {
                productButton.addClass('d-none');
            } else {
                productButton.removeClass('d-none');
            }
        });
    });
</script>

<div class="input-group">
    <button type="submit" class="btn btn-primary" name="complete" value="complete">
        <?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Complete' ?>
    </button>
    <button type="submit" class="btn btn-primary" name="product" value="product">
        <?= !empty($this->lang->line('next')) ? $this->lang->line('next') : 'Product Details Page' ?>
    </button>
</div>


<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller[]" id="type_of_seller" multiple>
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValue = $(this).val();
            console.log(selectedValue);
            var productButton = $('button[name="product"]');
            
            if (selectedValue === 'Investors') {
                console.log('hello')
                productButton.addClass('d-none');
            } else {
                console.log('hello Harish')
                productButton.removeClass('d-none');
            }
        });
    });
</script>








<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller[]" id="type_of_seller" multiple>
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValues = $(this).val();
            console.log(selectedValues);
            var productButton = $('button[name="product"]');
            
            if (selectedValues.includes('Investors')) {
                console.log('hello');
                productButton.addClass('d-none');
            } else {
                console.log('hello Harish');
                productButton.removeClass('d-none');
            }
        });
    });
</script>





<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller[]" id="type_of_seller" multiple>
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValues = $(this).val();
            console.log(selectedValues);
            var productButton = $('button[name="product"]');
            
            if (selectedValues.includes('Investors')) {
                console.log('hello');
                productButton.addClass('d-none');
            } else {
                console.log('hello Harish');
                productButton.removeClass('d-none');
            }
        });
    });
</script>




<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller[]" id="type_of_seller" multiple>
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <?php if ($value['name'] !== 'Investors') { ?>
                    <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValues = $(this).val();
            console.log(selectedValues);
            var productButton = $('button[name="product"]');
            
            if (selectedValues.includes('Investors')) {
                console.log('hello');
                productButton.addClass('d-none');
            } else {
                console.log('hello Harish');
                productButton.removeClass('d-none');
            }
        });
    });
</script>

<!-- last -->
<div class="col-md-6 col-12">
    <div class="input-group">
        <select name="type_of_seller[]" id="type_of_seller" multiple>
            <option value=''>Business Category</option>
            <?php foreach ($data as $key => $value) { ?>
                <?php if ($value['name'] !== 'Investors') { ?>
                    <option value='<?php echo $value['name']?>'><?php echo $value['name']?></option>
                <?php } ?>
            <?php } ?>
        </select>
        <i class="fab fa-dropbox"></i>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#type_of_seller').change(function() {
            var selectedValues = $(this).val();
            console.log(selectedValues);
            var productButton = $('button[name="product"]');
            
            if (selectedValues && selectedValues.length > 1) {
                if (selectedValues.includes('Investors')) {
                    var filteredValues = selectedValues.filter(function(value) {
                        return value !== 'Investors';
                    });
                    $(this).val(filteredValues);
                    console.log('Investors cannot be selected with other options.');
                }
            }
            
            if (selectedValues && selectedValues.includes('Investors')) {
                console.log('hello');
                productButton.addClass('d-none');
            } else {
                console.log('hello Harish');
                productButton.removeClass('d-none');
            }
        });
    });
</script>

it will hide Investors option permanently but i want to hide Investors when i select any other option
<!-- last -->


$data1=array(
    'type_of_seller'=>$_POST['type_of_seller'],
    'state' => $this->input->post('state'),
    'destrict' => $this->input->post('destrict'),
    'city' => $this->input->post('city'),
    'area' => $this->input->post('area'),
    'pincode' => $this->input->post('pincode'),
    'country' => $this->input->post('country'),
    'address' => $this->input->post('google_address'),
    'latitude' => $this->input->post('lat'),
    'latitude' => $this->input->post('lang'),
);
$this->db->where('id',$user_id);
$this->db->update('users', $data1);

in $_POST['type_of_seller'] i have multiple values i need to store that values in couma saprated in db



$data1 = array(
    'type_of_seller' => implode(',', $_POST['type_of_seller']),
    'state' => $this->input->post('state'),
    'destrict' => $this->input->post('destrict'),
    'city' => $this->input->post('city'),
    'area' => $this->input->post('area'),
    'pincode' => $this->input->post('pincode'),
    'country' => $this->input->post('country'),
    'address' => $this->input->post('google_address'),
    'latitude' => $this->input->post('lat'),
    'latitude' => $this->input->post('lang'),
);

$this->db->where('id', $user_id);
$this->db->update('users', $data1);

here i need to store image in broucher i got file from input broucher and i need to  store my image in base_url('/uploads/media/2023') folder

$uploadPath = FCPATH . 'uploads/media/2023/';

// Check if the file was uploaded successfully
if (isset($_FILES['broucher']) && $_FILES['broucher']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['broucher'];
    
    // Generate a unique filename for the uploaded file
    $filename = uniqid() . '_' . $file['name'];
    
    // Move the uploaded file to the desired folder
    if (move_uploaded_file($file['tmp_name'], $uploadPath . $filename)) {
        // File was successfully uploaded, update the database
        $data1 = array(
            'type_of_seller' => implode(',', $_POST['type_of_seller']),
            'state' => $this->input->post('state'),
            'destrict' => $this->input->post('destrict'),
            'city' => $this->input->post('city'),
            'area' => $this->input->post('area'),
            'pincode' => $this->input->post('pincode'),
            'country' => $this->input->post('country'),
            'address' => $this->input->post('google_address'),
            'latitude' => $this->input->post('lat'),
            'latitude' => $this->input->post('lang'),
            'broucher' => $filename // Save the filename in the 'broucher' field
        );

        $this->db->where('id', $user_id);
        $this->db->update('users', $data1);
    } else {
        // Failed to move the uploaded file
        echo 'Failed to move the uploaded file.';
    }
} else {
    // No file uploaded or an error occurred during upload
    echo 'No file uploaded or an error occurred during upload.';
}

<a href="#" class="popup-link" data-image="<?= base_url() . $row['broucher_image'] ?>">
    <i class="fa fa-image">Broucher Image</i>
</a>



<div class="order-prifrence d-flex">
    <input type="radio" name="order" id="select_radio">
    <p>Attach file Online(Allowed File : 94 x 57 mm, 30.00 MB, PDF Only) <a href="#">more info</a></p>
 </div>
 i need to remove d-none class from id="price_new" when i select id="select_radio"
 <p class="mb-0 mt-2 price d-none" id="price_new">
    <span id="price">
    </span></div></p>
 
 
 
    <div class="order-prifrence d-flex">
       <input type="radio" name="order" id="select_radio">
       <p>Attach file Online(Allowed File : 94 x 57 mm, 30.00 MB, PDF Only) <a href="#">more info</a></p>
   </div>
   
   <p class="mb-0 mt-2 price d-none" id="price_new">
       <span id="price"></span>
   </p>
   
   <script>
       $(document).ready(function() {
           $('#select_radio').change(function() {
               if ($(this).is(':checked')) {
                   $('#price_new').removeClass('d-none');
               } else {
                   $('#price_new').addClass('d-none');
               }
           });
       });
   </script>
 
 
 <script>
     setTimeout(() => {
     window.location.href = "https://alphawizzserver.com/arrow_print_club/home/send_file";
 
     // Open the modal after the redirect
     const modal = document.getElementById("myModal");
     const closeButton = document.getElementsByClassName("close")[0];
 
     modal.style.display = "block";
 
     closeButton.onclick = function () {
         modal.style.display = "none";
     };
 
     window.onclick = function (event) {
         if (event.target === modal) {
             modal.style.display = "none";
         }
     };
 }, 2000);
 
 </script>
 
   



