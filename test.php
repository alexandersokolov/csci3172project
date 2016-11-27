<html>
<head>
  <title>ESS - User Registration</title>

  <!-- Semantic UI CSS -->
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="description" content="Web Centric Project">
  <meta name="keywords" content="Web,Centric,Project">
  <meta name="author" content="Team Squad">


  <!-- Stylesheet Link -->
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  <!-- js links -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="semantic/dist/semantic.js"></script>

  <!-- jQuery -->
</head>
<body>
  <div class="ui horizontal divider">or</div>
  <form class="ui form segment" id="testForm">
    <p>Tell Us About Yourself</p>
    <div class="two fields">
      <div class="field">
        <label>Name</label>
        <input placeholder="First Name" name="name" type="text">
      </div>
      <div class="field">
        <label>Gender</label>
        <select class="ui dropdown" name="gender">
          <option value="">Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="two fields">
      <div class="field">
        <label>Username</label>
        <input placeholder="Username" name="username" type="text">
      </div>
      <div class="field">
        <label>Password</label>
        <input type="password" name="password">
      </div>
    </div>
    <div class="field">
      <label>Skills</label>
      <select name="skills" multiple="" class="ui dropdown">
        <option value="">Select Skills</option>
        <option value="css">CSS</option>
        <option value="html">HTML</option>
        <option value="javascript">Javascript</option>
        <option value="design">Graphic Design</option>
        <option value="plumbing">Plumbing</option>
        <option value="mech">Mechanical Engineering</option>
        <option value="repair">Kitchen Repair</option>
      </select>
    </div>
    <div class="inline field">
      <div class="ui checkbox">
        <input type="checkbox" name="terms">
        <label>I agree to the terms and conditions</label>
      </div>
    </div>
    <div class="ui primary submit button">Submit</div>
    <div class="ui error message"></div>
  </form>
</body>
</html>



<script>

$('#testForm').form({
    on: 'blur',
    fields: {
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your name'
          }
        ]
      },
      skills: {
        identifier: 'skills',
        rules: [
          {
            type   : 'minCount[2]',
            prompt : 'Please select at least two skills'
          }
        ]
      },
      gender: {
        identifier: 'gender',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please select a gender'
          }
        ]
      },
      username: {
        identifier: 'username',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter a username'
          }
        ]
      },
      password: {
        identifier: 'password',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter a password'
          },
          {
            type   : 'minLength[6]',
            prompt : 'Your password must be at least {ruleValue} characters'
          }
        ]
      },
      terms: {
        identifier: 'terms',
        rules: [
          {
            type   : 'checked',
            prompt : 'You must agree to the terms and conditions'
          }
        ]
      }
    }
  })
;
</script>
