/*Iššokantis langas, paspaudus mygtuką, su galimybe parsisiųsti CV*/
function parsisiusti() {
    let dokumentas=confirm("Ar tikrai norite parsisiųsti mano CV?");
    if (dokumentas==true) {
        let a = document.createElement("a");
        a.href = "Edita Paulauskienė (1) (2).pdf";
        a.setAttribute("download", "");
        a.click();
    }
}

