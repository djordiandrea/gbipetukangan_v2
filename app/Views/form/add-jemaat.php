<form>
    <div class="form-group">
        <label for="fullname">Fullname:</label>
        <input type="text" class="form-control" id="jmt_fullname" placeholder="Enter Fullname" name="fullname">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="text" class="form-control" id="jmt_dob" placeholder="Enter DOB" name="DOB">
    </div>
    <div class="form-group">
        <label for="number">Number:</label>
        <input type="text" class="form-control" id="jmt_number" placeholder="Input 62 First" name="number" inputmode="numeric" pattern="[0-9]*">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <textarea name="address" class="form-control" id="jmt_address"></textarea>
    </div>
    <input type="text" name="isactive" id="jmt_isactive" value=1 hidden>
    <input type="text" name="id" id="jmt_id" value=0 hidden>
</form>
<script>
    flatpickr("#jmt_dob", {
        dateFormat: "Y-m-d",
        disableMobile: true
    });

    $('#jmt_number').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>