function toggle_table_and_button(current_element, new_element)
{
	document.getElementById(current_element + "_button").classList.remove("d-none");
	document.getElementById(current_element + "_table").classList.add("d-none");
	
	document.getElementById(new_element + "_button").classList.add("d-none");
	document.getElementById(new_element + "_table").classList.remove("d-none");
}