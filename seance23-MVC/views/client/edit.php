<h1>Client Edit</h1>
<form action="?controller=client&function=update" method="post">
            <input type="hidden" name="id" value="<?=  $data['client']['id']; ?>">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?=  $data['client']['name']; ?>" >
            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?=  $data['client']['address']; ?>" >
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="<?=  $data['client']['phone']; ?>">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?=  $data['client']['email']; ?>">
            <label for="dob">Birthday</label>
            <input type="date" id="dob" name="birthday" value="<?=  $data['client']['birthday']; ?>">
            <label for="city">City</label>
            <select name="city_id" id="city">
                <option value=""> Select City</option>
                <?php
                    foreach($data['cities'] as $row){
                ?>
                    <option value="<?= $row['id']; ?>" <?php if ($row['id']==$data['client']['city_id']){echo "selected"; }?>><?= $row['city']; ?></option>
                <?php     
                    }
                ?>
            </select>
            <input type="submit" value="Update">
        </form>