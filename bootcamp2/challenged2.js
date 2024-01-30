function submitForm() {
    const name = document.getElementById("nameForm");
    const role = document.getElementById("roleForm");
    const availability = document.getElementById("availabilityForm");
    const age = document.getElementById("ageForm");
    const location = document.getElementById("locationForm");
    const experience = document.getElementById("experienceForm");
    const email = document.getElementById("emailForm");

    document.getElementById("name").textContent = name.value == "" ? "-" : name.value;
    document.getElementById("role").textContent = role.value == "" ? "-" : role.value;
    document.getElementById("availability").textContent = availability.value == "" ? "-" : availability.value;
    document.getElementById("age").textContent = age.value == "" ? "-" : age.value + " tahun";
    document.getElementById("location").textContent = location.value == "" ? "-" : location.value;
    document.getElementById("experience").textContent = experience.value == "" ? "-" : experience.value + " tahun";
    document.getElementById("email").textContent = email.value == "" ? "-" : email.value;

    name.value ="";
    role.value ="";
    availability.value ="";
    age.value ="";
    location.value ="";
    experience.value ="";
    email.value ="";

    
}