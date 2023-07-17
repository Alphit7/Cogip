<!DOCTYPE html>
<html>

<head>
    <title>Formulaire POST</title>
</head>

<body>
    <form action="/edit-contact/<?php echo $_GET['id'] ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required value="<?php echo $_GET['name'] ?>"><br><br>

        <label for='company_id'>Company id:</label>
        <input type="text" id="company_id" name="company_id" required value="<?php echo $_GET['company_id'] ?>">

        <label for='email'>Mail:</label>
        <input type="mail" id="email" name="email" required value="<?php echo $_GET['email'] ?>">

        <label for='email'>Mail:</label>
        <input type="email" id="email" name="email" required value="<?php echo $_GET['email'] ?>">

        <label for='phone'>Phone:</label>
        <input type="tel" id="phone" name="phone" required value="<?php echo $_GET['phone'] ?>">

        <input type="submit" name="send" value="send">
    </form>
    <?php if (isset($errors) && !empty($errors)): ?>
    <div class="error-messages">
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</body>

</html>