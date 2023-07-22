document.addEventListener('DOMContentLoaded', function(){
    var form = document.getElementById('contact-form');

    form.addEventListener('submit', function(event){
        event.preventDefault();

        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        if(name && email && message){
            // create a new XMLHttpRequest
            var xhr = new XMLHttpRequest();
            var url = "save_message.php";

            // prepare the data
            var data = new FormData();
            data.append('name', name);
            data.append('email', email);
            data.append('message', message);

            // send a POST request
            xhr.open("POST", url, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert('Thank you, ' + name + '. Your message has been received.');
                }
            };
            xhr.send(data);
        }
        else{
            alert('Please fill all the fields.');
        }
    });
});
