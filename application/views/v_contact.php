

<div id="content">
    <section>
        <h1><?php echo $contact ?></h1>


<center>
    <form method="POST" action="<?php echo base_url(); ?>index.php/web/Pesan">
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="nm" placeholder="Name"></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><input type="text" name="mail" placeholder="E-mail"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td><textarea name="komen"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td></td>
            </tr>
        </table>
    </form>
    <br><br>
    <?php if (isset($name)) {
        
    ?>
    <table>
        <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td>:</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Message</td>
                <td>:</td>
                <td><?php echo $pesan; ?></td>
            </tr>
    </table>
    <?php  } ?>
</center>
</section>
</div>