function load_exercise(exercise) {
  let exercises = {1: "mult_table",
                   2: "quiz",
                   3: "web_store"};
  for(let i=1; i<4; i++)
  {
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
}
//Clears any form data
function clear_form() {
	document.getElementById("quiz_form").reset();
}
function remove_quiz_results() {
  try {
    document.getElementById("quiz_results").remove();
  }
  catch(error) {
    return;
  }
}
