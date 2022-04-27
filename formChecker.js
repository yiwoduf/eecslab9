document.addEventListener("DOMContentLoaded",() =>
{
    document.querySelector("#submit").addEventListener("click",(ev) =>
    {
        let quantity3080 = document.getElementById('3080ti');
        let quantity3090 = document.getElementById('3090');
        let quantity6900 = document.getElementById('6900');

        let email = document.getElementById('username');
        let password = document.getElementById('password');

        let free = document.getElementById('free');
        let overNight = document.getElementById('overNight');
        let threeDay = document.getElementById('threeDay');

        if (quantity3080.value == "" && quantity3090.value == "" && quantity6900.value == "")
        {
            alert("Please enter the item quantity.");
            ev.preventDefault();
        }
        if (!verifyEmail(email.value))
        {
            alert("Please enter a valid email address.");
            ev.preventDefault();
        }
        if(password.value.length == 0)
        {
            alert("Please enter your password.");
            ev.preventDefault();
        }
        if (free.checked == false && overNight.checked == false && threeDay.checked == false)
        {
            alert("Please select a shipping option.");
            ev.preventDefault();
        }
    });

    function verifyEmail(e) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (e.match(mailformat)) {
            return true;
        }
            return false;
    }
});