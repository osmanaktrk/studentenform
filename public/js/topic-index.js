let postEditBtn = document.querySelectorAll(".post-edit-btn");
let postEdit = document.querySelectorAll(".post-edit");
let postEditCancel = document.querySelectorAll(".post-edit-cancel-btn");

postEditBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        postEdit.forEach((edit) => {
            if (edit.style.display == "none") {
                edit.style.display = "block";
            } else {
                edit.style.display = "none";
            }
        });
    });
});







postEditCancel.forEach((cancel)=>{
    cancel.addEventListener("click", () => {

        postEdit.forEach((edit)=>{
            edit.style.display = "none";
        });
        
    });
});






