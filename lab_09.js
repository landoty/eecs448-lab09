let images_links = {
  1: "heart_chip.jpg",
  2: "kanye_air.jpg",
  3: "tortilla_blanket.jpg"
};

let image_names = {
  1: "Heart Chip $100",
  2: "Donda Drop Air $0.10",
  3: "Tortilla Blanket $1000"
};

let current_image = 1;

function load_exercise(exercise) {
  let exercises = {1: "mult_table",
                   2: "quiz",
                   3: "web_store"};
  for(let i=1; i<4; i++)
  {
    if(exercise==3) {
      document.getElementById("image_div").style.display="block";
      document.getElementById("ordering").style.display="block";
    }
    if(exercise == i)
    {
      document.getElementById(exercises[i]).style.display = "block";
    }
    else
    {
      document.getElementById(exercises[i]).style.display = "none";
    }
  }
  remove_quiz_results();
  remove_receipt();
}
//Clears any form data
function clear_form() {
	document.getElementById("quiz_form").reset();
  document.getElementById("order_form").reset();
}
function remove_quiz_results() {
  try {
    document.getElementById("quiz_results").remove();
  }
  catch(error) {
    return;
  }
}

function remove_receipt() {
  try {
    document.getElementById("receipt").remove();
  }
  catch(error) {
    return;
  }
}

function next() {
  image_div = document.getElementById("image_div");
  let title = image_div.children[0];
  let source = image_div.children[2];
  if(current_image == 3)
  {
    current_image = 1;
  }
  else {
    current_image++;
  }
  title.innerHTML = image_names[current_image];
  source.src = "./imgs/" + images_links[current_image];
}
//Regresses slideshow. Loops to end if at the beginning
function previous() {
  image_div = document.getElementById("image_div");
  let title = image_div.children[0];
  let source = image_div.children[2];
  if(current_image == 1)
  {
    current_image = 3;
  }
  else {
    current_image--;
  }
  title.innerHTML = image_names[current_image];
  source.src = "./imgs/" + images_links[current_image];
}

function check_form() {
  inputs = document.getElementById("order_form").getElementsByTagName("input");
  //Checks the first seven inptus (Eight and nine are buttons)
  for(let i=0; i<7; i++) {
    //Checks if any are blank
    if(inputs[i].value == "") {
      console.log(i);
      alert("Cannot have empty/null input for " + inputs[i].name + "!");
      return false;
    }
    //Checks if quantities are negative
    else if((i>1 && i<5) && parseInt(inputs[i].value) < 0) {
      alert("Cannot have negative quantities for " + inputs[i].name + "!");
      return false;
    }
    //Checks if quantities are non-integers
    else if((i>1 && i<5) && !parseInt(inputs[i].value)) {
      alert("Must enter a positive integer for " + inputs[i].name + "!");
      return false;
    }
  }
  //Validates username using regular expressions
  username = inputs[0].value;
  let regex_username = /[a-zA-Z0-9]*@[a-zA-Z]*\.[a-z]{1,}/;
  if(!regex_username.test(username)) {
    alert("Username must be of the form name@domain.com!");
    return false;
  }

  seven_day = inputs[5].checked;
  three_day = inputs[6].checked;
  overnight = inputs[7].checked;
  //Checks that a shipping option is selected
  if(!(seven_day || three_day || overnight)) {
    alert("Must pick shipping option!");
    return false;
  }
  return true;
}
