<?php
$missing = array();

if (isset($_POST['send'])) {
if (isset($_POST['Common'])) $Common = $_POST['Common'];
$expected = array('name', 'email', 'comments');

$required = array('name', 'comments', 'email');
require('processmail.inc.php');
}
?>


 <form id="feedback" method="post" action="">
            <p>
            
                <label for="name">Name:
                
                </label>
                <input name="name" id="name" type="text" class="formbox"
                <?php if ($missing || $errors) {
                echo 'value="' . htmlentities($name, ENT_COMPAT, 'UTF-8'). '"';
                } ?>><?php if ($missing && in_array('name', $missing)) { ?>
                  <span class="warning"> Please enter your name.</span>
                <?php } ?>
                
            </p>
            <p>
                <label for="email">Email:
                
                </label>
                <input name="email" id="email" type="text" class="formbox"
                <?php if ($missing || $errors) {
                echo 'value="' . htmlentities($email, ENT_COMPAT, 'UTF-8'). '"';
                } ?>><?php if ($missing && in_array('email', $missing)) { ?>
                  <span class="warning">Please enter your email </span>
                <?php } ?>
            </p>
            <p>
                <label for="comments">Comments: <?php if ($missing && in_array('comments', $missing)) { ?>
                  <span class="warning"> Please enter your comments.</span>
                <?php } ?><br />
                
                </label>
                <textarea name="comments" id="comments" cols="60" rows="8"
                <?php if ($missing || $errors) {
                echo htmlentities($comments, ENT_COMPAT, 'UTF-8');
                } ?>></textarea>
            
           <br />
                
                     <input name="send" id="send" type="submit" value="Send Message"> </p>
				
                <input type="hidden" name="Common" id="Common" value="<?php echo($Common); ?>"  />
           
        </form>
        </p>
        
  