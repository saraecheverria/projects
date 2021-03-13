function loadUp () {


    document.getElementById("firstInput").addEventListener("focus", mouseOverFirst);
    document.getElementById("firstInput").addEventListener("mouseout", mouseOutFirstb);
  
    function mouseOverFirst() {
      document.getElementById("hoverMess1").style.display = "inline";
    }
  
    function mouseOutFirstb() {
      document.getElementById("hoverMess1").style.display = "none";
    }
  
  
    document.getElementById("secondInput").addEventListener("focus", mouseOverSecond);
    document.getElementById("secondInput").addEventListener("mouseout", mouseOutSecondb);
  
    function mouseOverSecond() {
      document.getElementById("hoverMess2").style.display = "inline";
    }
  
    function mouseOutSecondb() {
      document.getElementById("hoverMess2").style.display = "none";
    }
  
  
    document.getElementById("thirdInput").addEventListener("focus", mouseOver);
    document.getElementById("thirdInput").addEventListener("mouseout", mouseOut);
  
    function mouseOver() {
      document.getElementById("hoverMess3").style.display = "inline";
    }
  
    function mouseOut() {
      document.getElementById("hoverMess3").style.display = "none";
    }
  
    document.getElementById("fourthInput").addEventListener("focus", mouseOvera);
    document.getElementById("fourthInput").addEventListener("mouseout", mouseOuta);
  
    function mouseOvera() {
      document.getElementById("hoverMess4").style.display = "inline";
    }
  
    function mouseOuta() {
      document.getElementById("hoverMess4").style.display = "none";
    }
  
    document.getElementById("fifthInput").addEventListener("focus", mouseOverb);
    document.getElementById("fifthInput").addEventListener("mouseout", mouseOutb);
  
    function mouseOverb() {
      document.getElementById("hoverMess5").style.display = "inline";
    }
  
    function mouseOutb() {
      document.getElementById("hoverMess5").style.display = "none";
    }
  
  
      window.validateData = function() {
      var x = document.forms["playerForm"]["firstname"].value;
      var y = document.forms["playerForm"]["lastname"].value;
      var w = document.forms["playerForm"]["phonenumber"].value;
      var z = document.forms["playerForm"]["emailaddress"].value;
      var q = document.forms["playerForm"]["serveraddress"].value;
  
        if (x == "") {
        document.getElementById("emptyFirstName").style.display = "inline";
        document.getElementById("firstThree").style.display = "none";
        } else {
        document.getElementById("emptyFirstName").style.display = "none";
        document.getElementById("firstThree").style.display = "inline";
        }
  
        if (!/^[a-zA-Z]*$/g.test(x) == true) {
        document.getElementById('errorNumber').style.display = "inline";
        document.getElementById("firstThree").style.display = "none";
        }else {
        document.getElementById('errorNumber').style.display = "none";
        document.getElementById("firstThree").style.display = "inline";
        }
  
  
        if (y == "") {
        document.getElementById("emptyLastName").style.display = "inline";
        document.getElementById("lastThree").style.display = "none";
        } else {
        document.getElementById("emptyLastName").style.display = "none";
        document.getElementById("lastThree").style.display = "inline";
        }
  
  
        if (!/^[a-zA-Z]*$/g.test(y) == true) {
        document.getElementById('lastError').style.display = "inline";
        document.getElementById("lastThree").style.display = "none";
        } else {
        document.getElementById('lastError').style.display = "none";
        document.getElementById("lastThree").style.display = "inline";
        }
  
  
  
        if (w == "") {
        document.getElementById("areaTwo").style.display = "inline";
        document.getElementById("areaThree").style.display = "none";
  
  
  
        } else {
        document.getElementById("areaTwo").style.display = "none";
        document.getElementById("areaThree").style.display = "inline";
        }
  
        if (/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(w) == false && w != "" && (/\d/.test(w) == false)){
        document.getElementById('areaOne').style.display = "inline";
        document.getElementById("areaThree").style.display = "none";
  
        }else {
        document.getElementById('areaOne').style.display = "none";
        document.getElementById("areaThree").style.display = "inline";
        }
  
        if (z == "") {
        document.getElementById("rayOne").style.display = "inline";
        document.getElementById("rayThree").style.display = "none";
  
        } else {
        document.getElementById("rayOne").style.display = "none";
        document.getElementById("rayThree").style.display = "inline";
        }
  
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(z) == false && z != ""){
        document.getElementById('rayTwo').style.display = "inline";
        document.getElementById("rayThree").style.display = "none";
  
        }else {
        document.getElementById('rayTwo').style.display = "none";
        document.getElementById('rayThree').style.display = "inline";
        }
  
        if (q == "") {
          document.getElementById("gapOne").style.display = "inline";
          document.getElementById("gapThree").style.display = "none";
  
        }else {
          document.getElementById("gapOne").style.display = "none";
          document.getElementById('gapThree').style.display = "inline";
        }
  
        if (/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/.test(q) == false && q != "") {
          document.getElementById('gapTwo').style.display = "inline";
          document.getElementById("gapThree").style.display = "none";
  
        }else {
          document.getElementById('gapTwo').style.display = "none";
          document.getElementById('gapThree').style.display = "inline";
        }
  
        if (emptyFirstName.style.display == "none" &&
            errorNumber.style.display == "none" &&
            emptyLastName.style.display == "none" &&
            lastError.style.display == "none" &&
            areaTwo.style.display == "none" &&
            areaOne.style.display == "none" &&
            rayOne.style.display == "none" &&
            rayTwo.style.display == "none" &&
            gapOne.style.display == "none" &&
            gapTwo.style.display == "none") {
              document.getElementById("myQuiz").style.display ="inline";
            }
  
            if (document.querySelector('input[name="question1"]:checked').value == "introvert"&&
            document.querySelector('input[name="question2"]:checked').value == "disney")  {
              document.getElementById("kitkat").style.display="block";
            } else {
              document.getElementById("kitkat").style.display="none";
             }
  
             if (document.querySelector('input[name="question1"]:checked').value == "introvert"&&
             document.querySelector('input[name="question2"]:checked').value == "universal")  {
               document.getElementById("sourpatchkids").style.display="block";
             } else {
               document.getElementById("sourpatchkids").style.display="none";
              }
  
              if (document.querySelector('input[name="question1"]:checked').value == "extrovert"&&
              document.querySelector('input[name="question2"]:checked').value == "disney")  {
                document.getElementById("lolipop").style.display="block";
              } else {
                document.getElementById("lolipop").style.display="none";
               }
  
               if (document.querySelector('input[name="question1"]:checked').value == "extrovert"&&
               document.querySelector('input[name="question2"]:checked').value == "universal")  {
                 document.getElementById("resee").style.display="block";
               } else {
                 document.getElementById("resee").style.display="none";
                }
              }
            }
  
  
  
            window.addEventListener("load", loadUp , false);
  
            var quiz = document.getElementById("myQuiz");
            var form = document.getElementById("myForm");
            function handleForm(event) {
              event.preventDefault();
              validateData();
  
            }
  
            form.addEventListener('submit', handleForm);
            quiz.addEventListener('submit', handleForm);