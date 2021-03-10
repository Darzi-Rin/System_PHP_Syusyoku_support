// Javascript Sample
function formSwitch() {
    hoge = document.getElementsByName('cate')
    if(hoge[0].checked){
        document.getElementById('itlist').style.display = "";
        document.getElementById('etclist').style.display = "";
    }else if(hoge[1].checked){
        document.getElementById('itlist').style.display = "";
        document.getElementById('etclist').style.display = "none";
    } else if(hoge[2].checked){
        document.getElementById('itlist').style.display = "none";  
        document.getElementById('etclist').style.display = "";  
    } else {
        document.getElementById('itlist').style.display = "none";
        document.getElementById('etclist').style.display = "none";
    }
}