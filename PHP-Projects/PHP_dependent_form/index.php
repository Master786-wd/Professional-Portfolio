<!--Styles-->
<style>

.card{
    border:none!important;
}
.card-body{
    border: 5px solid dodgerblue;
    border-radius: 30px;
}
.form-select{
    border: 1px solid #333!important;
}

</style>


<?php 

include 'connection/connection.inc.php';

$country = "SELECT  * FROM  countries";
$country_qry = mysqli_query($conn, $country);

include 'include_common/header.php' ?>

<div class="d-flex justify-content-center align-items-center">
    <div class="container my-5">
        <h1 class="text-center my-5">Dependent Dropdown</h1>
        <div class="card">
            <div class="card-body">
                <div class="input-group mb-4 mt-3">
                    <select class="form-select" id="country" name="country">
                        <option selected disabled>Select Country</option>
                        <?php while ($row = mysqli_fetch_assoc($country_qry)) : ?>
                            <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                            <?php endwhile ?>
                    </select>
                </div>
                <div class="input-group mb-4">
                    <select class="form-select" id="state" name='state'>
                        <option selected disabled>Select State</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="city" name="city">
                        <option selected disabled>Select City</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include_common/footer.php'?>

<script>
    //State through Country
   $('#country').on('change', function(){
     let country_id = this.value;
     //console.log(country_id);
     $.ajax({
        url:'ajax/state.php',
        type:'POST',
        data:{
            country_data: country_id
        },
        success:function(result){
            $('#state').html(result);
            //console.log(result);
        }
     })
   })
// City through State

    $('#state').on('change', function(){
   let state_id = this.value;
   //console.log(state_id);
   $.ajax({
       url:'ajax/city.php',
       type:'POST',
       data:{
             state_data: state_id


       },
       success: function(result){
        $('#city').html(result);
          //console.log(result);
       }
   })
    })
    </script>