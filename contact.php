
<?php
  if(!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $toEmail = "hello@tobycenteno.ca";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Thank you for contacting me! I will respond to you within 24 hours.";
        $type = "success";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact - Toby Centeno Web Development</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <meta name="description" content="Hey, I'm Toby. I am a web developer and software engineer. Want to work with me? Email me at hello@tobycenteno.ca.">
  <meta name="keywords" content="toby,centeno,edmonton,web,design,development,software,engineer,programmer">
  <meta name="author" content="Toby Centeno" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
  <link rel="stylesheet" media="screen" href="css/reset.css">
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header>
      <div class="logo">
        <a href="/staging"><img src="img/logo-light.png" alt="logo"></a>
      </div>
      <nav >
        <ul class="nav">
          <li><a href="about">About</a><span class="orange">/</span></li>
          <li><a href="work">Work</a><span class="orange">/</span></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div class="contact-content"  data-aos="fade-in" data-aos-duration="1000">
      <div class="contact-title">
        <h3>Let's work together!</h3>
        <p>If you have any questions, feel free to contact me on the channels below.</p>
      </div>
      <div class="contact-channel">
        <div class="contact-social">
          <table>
            <tr>
              <td>
                <svg fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 503.604 503.604" style="enable-background:new 0 0 503.604 503.604;" xml:space="preserve"><path d="M337.324,0H167.192c-28.924,0-53.5,23.584-53.5,52.5v398.664c0,28.916,24.056,52.44,52.98,52.44l170.412-0.184 c28.92,0,52.58-23.528,52.58-52.448l0.248-398.5C389.908,23.452,366.364,0,337.324,0z M227.68,31.476h49.36 c4.336,0,7.868,3.52,7.868,7.868c0,4.348-3.532,7.868-7.868,7.868h-49.36c-4.348,0-7.868-3.52-7.868-7.868 C219.812,34.996,223.332,31.476,227.68,31.476z M198.02,33.98c2.916-2.912,8.224-2.952,11.136,0c1.46,1.456,2.324,3.5,2.324,5.588 c0,2.048-0.864,4.088-2.324,5.548c-1.452,1.46-3.504,2.32-5.548,2.32c-2.084,0-4.088-0.86-5.588-2.32 c-1.452-1.456-2.28-3.5-2.28-5.548C195.736,37.48,196.568,35.436,198.02,33.98z M250.772,488.008 c-12.984,0-23.544-10.568-23.544-23.548c0-12.984,10.56-23.548,23.544-23.548s23.544,10.564,23.544,23.548 C274.316,477.44,263.752,488.008,250.772,488.008z M365.488,424.908H141.232V74.756h224.256V424.908z"/></svg>
              </td>
              <td>
                +1 780 777 7460
              </td>
            </tr>
            <tr>
              <td>
                <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><polygon points="339.392,258.624 512,367.744 512,144.896 		"/><polygon points="0,144.896 0,367.744 172.608,258.624 		"/><path d="M480,80H32C16.032,80,3.36,91.904,0.96,107.232L256,275.264l255.04-168.032C508.64,91.904,495.968,80,480,80z"/><path d="M310.08,277.952l-45.28,29.824c-2.688,1.76-5.728,2.624-8.8,2.624c-3.072,0-6.112-0.864-8.8-2.624l-45.28-29.856 L1.024,404.992C3.488,420.192,16.096,432,32,432h448c15.904,0,28.512-11.808,30.976-27.008L310.08,277.952z"/></svg>
              </td>
              <td>
                hello@tobycenteno.ca
              </td>
            </tr>
            <tr>
              <td>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill:#4CAF50;" d="M256.064,0h-0.128l0,0C114.784,0,0,114.816,0,256c0,56,18.048,107.904,48.736,150.048l-31.904,95.104 l98.4-31.456C155.712,496.512,204,512,256.064,512C397.216,512,512,397.152,512,256S397.216,0,256.064,0z"/><path style="fill:#FAFAFA;" d="M405.024,361.504c-6.176,17.44-30.688,31.904-50.24,36.128c-13.376,2.848-30.848,5.12-89.664-19.264 C189.888,347.2,141.44,270.752,137.664,265.792c-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624,26.176-62.304 c6.176-6.304,16.384-9.184,26.176-9.184c3.168,0,6.016,0.16,8.576,0.288c7.52,0.32,11.296,0.768,16.256,12.64 c6.176,14.88,21.216,51.616,23.008,55.392c1.824,3.776,3.648,8.896,1.088,13.856c-2.4,5.12-4.512,7.392-8.288,11.744 c-3.776,4.352-7.36,7.68-11.136,12.352c-3.456,4.064-7.36,8.416-3.008,15.936c4.352,7.36,19.392,31.904,41.536,51.616 c28.576,25.44,51.744,33.568,60.032,37.024c6.176,2.56,13.536,1.952,18.048-2.848c5.728-6.176,12.8-16.416,20-26.496 c5.12-7.232,11.584-8.128,18.368-5.568c6.912,2.4,43.488,20.48,51.008,24.224c7.52,3.776,12.48,5.568,14.304,8.736 C411.2,329.152,411.2,344.032,405.024,361.504z"/></svg>
              </td>
              <td>
                +1 780 777 7460
              </td>
            </tr>
            <tr>
              <td>
               <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.731 455.731" style="enable-background:new 0 0 455.731 455.731;" xml:space="preserve"><rect x="0" y="0" style="fill:#7D3DAF;" width="455.731" height="455.731"/><path style="fill:#FFFFFF;" d="M371.996,146.901l-0.09-0.36c-7.28-29.43-40.1-61.01-70.24-67.58l-0.34-0.07 c-48.75-9.3-98.18-9.3-146.92,0l-0.35,0.07c-30.13,6.57-62.95,38.15-70.24,67.58l-0.08,0.36c-9,41.1-9,82.78,0,123.88l0.08,0.36 c6.979,28.174,37.355,58.303,66.37,66.589v32.852c0,11.89,14.49,17.73,22.73,9.15l33.285-34.599 c7.219,0.404,14.442,0.629,21.665,0.629c24.54,0,49.09-2.32,73.46-6.97l0.34-0.07c30.14-6.57,62.96-38.15,70.24-67.58l0.09-0.36 C380.996,229.681,380.996,188.001,371.996,146.901z M345.656,264.821c-4.86,19.2-29.78,43.07-49.58,47.48 c-25.921,4.929-52.047,7.036-78.147,6.313c-0.519-0.014-1.018,0.187-1.38,0.559c-3.704,3.802-24.303,24.948-24.303,24.948 l-25.85,26.53c-1.89,1.97-5.21,0.63-5.21-2.09v-54.422c0-0.899-0.642-1.663-1.525-1.836c-0.005-0.001-0.01-0.002-0.015-0.003 c-19.8-4.41-44.71-28.28-49.58-47.48c-8.1-37.15-8.1-74.81,0-111.96c4.87-19.2,29.78-43.07,49.58-47.48 c45.27-8.61,91.17-8.61,136.43,0c19.81,4.41,44.72,28.28,49.58,47.48C353.765,190.011,353.765,227.671,345.656,264.821z"/><path style="fill:#FFFFFF;" d="M270.937,289.942c-3.044-0.924-5.945-1.545-8.639-2.663 c-27.916-11.582-53.608-26.524-73.959-49.429c-11.573-13.025-20.631-27.73-28.288-43.292c-3.631-7.38-6.691-15.049-9.81-22.668 c-2.844-6.948,1.345-14.126,5.756-19.361c4.139-4.913,9.465-8.673,15.233-11.444c4.502-2.163,8.943-0.916,12.231,2.9 c7.108,8.25,13.637,16.922,18.924,26.485c3.251,5.882,2.359,13.072-3.533,17.075c-1.432,0.973-2.737,2.115-4.071,3.214 c-1.17,0.963-2.271,1.936-3.073,3.24c-1.466,2.386-1.536,5.2-0.592,7.794c7.266,19.968,19.513,35.495,39.611,43.858 c3.216,1.338,6.446,2.896,10.151,2.464c6.205-0.725,8.214-7.531,12.562-11.087c4.25-3.475,9.681-3.521,14.259-0.624 c4.579,2.898,9.018,6.009,13.43,9.153c4.331,3.086,8.643,6.105,12.638,9.623c3.841,3.383,5.164,7.821,3.001,12.412 c-3.96,8.408-9.722,15.403-18.034,19.868C276.387,288.719,273.584,289.127,270.937,289.942 C267.893,289.017,273.584,289.127,270.937,289.942z"/><path style="fill:#FFFFFF;" d="M227.942,131.471c36.515,1.023,66.506,25.256,72.933,61.356c1.095,6.151,1.485,12.44,1.972,18.683 c0.205,2.626-1.282,5.121-4.116,5.155c-2.927,0.035-4.244-2.414-4.434-5.039c-0.376-5.196-0.637-10.415-1.353-15.568 c-3.78-27.201-25.47-49.705-52.545-54.534c-4.074-0.727-8.244-0.918-12.371-1.351c-2.609-0.274-6.026-0.432-6.604-3.675 c-0.485-2.719,1.81-4.884,4.399-5.023C226.527,131.436,227.235,131.468,227.942,131.471 C264.457,132.494,227.235,131.468,227.942,131.471z"/><path style="fill:#FFFFFF;" d="M283.434,203.407c-0.06,0.456-0.092,1.528-0.359,2.538c-0.969,3.666-6.527,4.125-7.807,0.425 c-0.379-1.098-0.436-2.347-0.438-3.529c-0.013-7.734-1.694-15.46-5.594-22.189c-4.009-6.916-10.134-12.73-17.318-16.248 c-4.344-2.127-9.042-3.449-13.803-4.237c-2.081-0.344-4.184-0.553-6.275-0.844c-2.534-0.352-3.887-1.967-3.767-4.464 c0.112-2.34,1.822-4.023,4.372-3.879c8.38,0.476,16.474,2.287,23.924,6.232c15.15,8.023,23.804,20.687,26.33,37.597 c0.114,0.766,0.298,1.525,0.356,2.294C283.198,199.002,283.288,200.903,283.434,203.407 C283.374,203.863,283.288,200.903,283.434,203.407z"/><path style="fill:#FFFFFF;" d="M260.722,202.523c-3.055,0.055-4.69-1.636-5.005-4.437c-0.219-1.953-0.392-3.932-0.858-5.832 c-0.918-3.742-2.907-7.21-6.055-9.503c-1.486-1.083-3.17-1.872-4.934-2.381c-2.241-0.647-4.568-0.469-6.804-1.017 c-2.428-0.595-3.771-2.561-3.389-4.839c0.347-2.073,2.364-3.691,4.629-3.527c14.157,1.022,24.275,8.341,25.719,25.007 c0.102,1.176,0.222,2.419-0.039,3.544C263.539,201.464,262.113,202.429,260.722,202.523 C257.667,202.578,262.113,202.429,260.722,202.523z"/></svg>         
            </td>
              <td>
                +1 780 777 7460
              </td>
            </tr>
            <tr>
              <td>
                <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g fill="#5c6bc0"><path d="m3.58 21.196h14.259l-.681-2.205c.101.088 5.842 5.009 5.842 5.009v-21.525c-.068-1.338-1.22-2.475-2.648-2.475l-16.767.003c-1.427 0-2.585 1.139-2.585 2.477v16.24c0 1.411 1.156 2.476 2.58 2.476zm10.548-15.513-.033.012.012-.012zm-7.631 1.269c1.833-1.334 3.532-1.27 3.532-1.27l.137.135c-2.243.535-3.26 1.537-3.26 1.537.104-.022 4.633-2.635 10.121.066 0 0-1.019-.937-3.124-1.537l.186-.183c.291.001 1.831.055 3.479 1.26 0 0 1.844 3.15 1.844 7.02-.061-.074-1.144 1.666-3.931 1.726 0 0-.472-.534-.808-1 1.63-.468 2.24-1.404 2.24-1.404-3.173 1.998-5.954 1.686-9.281.336-.031 0-.045-.014-.061-.03v-.006c-.016-.015-.03-.03-.061-.03h-.06c-.204-.134-.34-.2-.34-.2s.609.936 2.174 1.404c-.411.469-.818 1.002-.818 1.002-2.786-.066-3.802-1.806-3.802-1.806 0-3.876 1.833-7.02 1.833-7.02z"/><path d="m14.308 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.576-1.335-1.29-1.335v.003c-.708 0-1.288.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"/><path d="m9.69 12.771c.711 0 1.29-.6 1.29-1.34 0-.735-.575-1.335-1.286-1.335l-.004.003c-.711 0-1.29.598-1.29 1.338 0 .734.579 1.334 1.29 1.334z"/></g></svg>
              </td>
              <td>
                tobtrois#5306
              </td>
            </tr>
          </table>
        </div>
        <div class="form-container">
          <form name="frmContact" method="post" enctype="multipart/form-data" onsubmit="return validateContactForm()">
              <div class="input-row">
                  <label style="padding-top: 20px;">Name<span class="required"> *</span></label> <br />
                  <input type="text" class="input-field" name="userName" id="userName" /><br />
                  <span id="userName-info" class="info"></span>
              </div>
              <div class="input-row">
                  <label>Email<span class="required"> *</span></label> <br /> 
                  <input type="text" class="input-field" name="userEmail" id="userEmail" /><br /> 
                    <span id="userEmail-info" class="info"></span>
              </div>
              <div class="input-row">
                  <label>Subject<span class="required"> *</span></label> <br />
                  <input type="text" class="input-field" name="subject" id="subject" /><br />
                  <span id="subject-info" class="info"></span>
              </div>
              <div class="input-row">
                  <label>Message<span class="required"> *</span></label> <br />
                  <textarea name="content" id="content" class="input-field" cols="60" rows="6"></textarea><br />
                  <span id="userMessage-info" class="info"></span>
              </div>
              <div>
                  <input type="submit" name="send" class="btn-submit"
                      value="Send" />
  
                  <div id="statusMessage"> 
                          <?php
                          if (! empty($message)) {
                              ?>
                              <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                          <?php
                          }
                          ?>
                      </div>
              </div>
          </form>
      </div>
    </div>
    </div>
  </div>
  <script src="js/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script>
    setTimeout(() => {
      AOS.init();
    }, 500);

    function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
  </script>
</body>
</html>