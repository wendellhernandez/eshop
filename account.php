<?php 
    include 'includes/head.inc.php'; 
?>
    <title><?php echo $_SESSION['username'] ?> | account - eShop Philippines</title>
</head>
<body>
    <header>
        <?php include 'includes/header.inc.php'; ?>
    </header>

    <main>
        <section class="account-main-section">
            <div class="account-main-container">
                <div class="account-main-left">
                    <div class="account-form-top">
                        <h2>Profile</h2>
                        <img src="assets/profile/profile.png">
                        
                        <p>Username: </p>
                        <span><?php echo $username ?></span>

                        <p>Email: </p>
                        <span><?php echo $email; ?></span>

                        <p>Registration Date: </p>
                        <span><?php echo $reg_date; ?></span>

                        <p>Current Address: <button class="account-form-update">Update</button></p>
                        <span>
                        <?php
                            if($result){
                                echo $result['street_name'] . ', ' . $result['barangay'] . ', ' . $result['city'] . ', ' . $result['province'] . ', ' . $result['postal_code'];
                            }else{
                                echo '<span class="account-form-noaddress">NO ADDRESS ADDED</span>';
                            }
                        ?>
                        </span>
                        
                    </div>
                </div>
                <div class="account-main-right">
                    <div class="account-form-top">
                        <h2>Address</h2>
                    </div>
                    <form action="handlers/account_update_address.inc.php" method="post">
                        <label for="street">Street Name</label>
                        <input required type="text" name="street" id="street" value="<?php if($result){
                            echo $result['street_name']; }?>">
                        <label for="barangay">Barangay</label>
                        <input required type="text" name="barangay" id="barangay" value="<?php if($result){
                            echo $result['barangay']; }?>">
                        <label for="city">City</label>
                        <input required type="text" name="city" id="city" value="<?php if($result){
                            echo $result['city']; }?>">
                        <label for="province">Province</label>
                        <input required type="text" name="province" id="province" value="<?php if($result){
                            echo $result['province']; }?>">
                        <label for="postalcode">Postal Code</label>
                        <input required type="text" name="postalcode" id="postalcode" value="<?php if($result){
                            echo $result['postal_code']; }?>">
                        <input type="submit" value="UPDATE">
                    </form>
                </div>
            </div>
        </section>

        <section class="login-download-section">
            <p>ESHOP APP DOWNLOAD</p>
            <img src="assets/login/download.png">
        </section>
    </main>

    <?php include 'includes/footer.inc.php'; ?>
    
    <script src="scripts/account.js"></script>
</body>
</html>