function snackbar() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}

function get_posts(choice){
    var target_url = "https://www.reddit.com/r/business/.json?limit=20";
    if (choice===1){
        target_url=target_url+"&before="+document.getElementById('before').value;
    }
    else if (choice===2) {
        target_url=target_url+"&after="+document.getElementById('after').value;
    }
    console.log(target_url);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            var data =JSON.parse(this.responseText);
            var before =data['data']['children'][0]['data']['name'];
            var after;
            var new_html="";
            var count = data['data']['dist'];
            console.log(count);
            if (count ===0){
                return ;
            }
            var end = count < 4 ? count : 4;

            for (i = 0; i<end; i++){
                console.log("it"+i);
                var child=(data['data']['children'][i]);
                var post_detail={title: child['data']['title'],post_url: child['data']['url'], reddit_url:child['data']['permalink'], author:child['data']['author'],num_comments:child['data']['num_comments']};
                //console.log(post_detail);
                after = child['data']['name'];
                new_html = new_html+
                    "<div class='card single_post shadow-lg'>" +
                        "<a style='color: black; text-decoration: none' href='"+post_detail['post_url']+"'><p class='card-header'> "+post_detail['title']+"</p></a>" +
                        "<div class='card-body' style='padding: 1rem'>" +
                          "<div class='row'>" +
                            "<div class='col-auto mr-auto'><a style='color: deepskyblue; text-decoration: none' href='"+"https://www.reddit.com/"+post_detail['reddit_url']+"'>"
                                    +post_detail['num_comments']+" comments</a></div> "+
                            "<div class='col-auto'>submitted by "+post_detail['author']+"</div> "+
                           "</div> " +
                        "</div>"+
                    "</div>";
            }
            document.getElementById('before').value= before;
            document.getElementById('after').value = after;
            document.getElementById('post_area').innerHTML = new_html ;
            if (end < 4){
                snackbar();
            }
        }
    };
    xhttp.open("GET", target_url, true);
    xhttp.send();
}


document.addEventListener('DOMContentLoaded', get_posts());