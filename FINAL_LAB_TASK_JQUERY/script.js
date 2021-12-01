<script>
    function myFuction(){
          let n = document.forms["form"]["name"].value;
        if (n == "") {
            alert("Cannot be empty");
            return false;
        }else if (n.length < 2) {
            alert("Name at least two words");
            return false;
        }else{
            if (n.match(/^[A-Za-z"."-]+$/)) {
                if (n[0].match(/^[A-Za-z]+$/)) {
                    alert("ok");
                    return true;
                }else{
                    alert("Name Must start with a letter");
                    return false;
                }
            }else{
                alert("a-z or A-Z or dot(.) or dash(-) is not valid!");
                return false;
            }
        }
        let n = document.forms["form"]["email"].value;
        if (n == "") {
            alert("Cannot be empty");
            return false;
        }else{
            if (n.match(/^([w-.]+@([w-]+.)+[w-]{2,4})?$/)) {
                alert("ok");
            } else {
                alert("Must be a valid email address");
                return false;
            }
        }