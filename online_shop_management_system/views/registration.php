<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section>
      <table border="0" width="100%" >
        <tr>
          <td width="35%"></td>
          <td>
            <p id="msg"></p>
            <br />
              <fieldset>
                <legend><h3>Registration</h3></legend>
                <br />
                Name: <input type="text" name="name" id="name" />
                <br /><br />
                Username: <input type="text" name="username" id="username" />
                <br /><br />
                Contract Number : <input type="text" name="number" id="number" />
                <br /><br />
                Password:
                <input type="password" name="password" id="password" />
                <br /><br />
                Confirm Password:
                <input type="password" name="password2" id="password2" />
                <br /><br />
                <input type="submit" name="submit" value="Submit" onclick="register()"/>
                <p>Already have an account? <a href="login.php">Login</a></p>
              </fieldset>
          </td>
          <td width="35%"></td>
        </tr>
      </table>
    </section>
  </body>
</html>