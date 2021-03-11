// Javascript Sample
function formSwitch() {
    hoge = document.getElementsByName('cate');
    if(hoge[1].checked){
        document.getElementById('it-list').style.display = "";
        document.getElementById('office-list').style.display = "none";
    } else if(hoge[2].checked){
        document.getElementById('it-list').style.display = "none";  
        document.getElementById('office-list').style.display = "";  
    } else {
        document.getElementById('it-list').style.display = "";
        document.getElementById('office-list').style.display = "";
    }
}