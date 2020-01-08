$(document).ready(function(){
  $(".delete").click(function(e){
    e.preventDefault();

   var idPost = this.dataset.mojidpost; //$(this).data("mojIdPost");
   this.parentElement.parentElement.style= "display:none";
   var result = document.getElementById("result_operation");

   $.ajax('models/post/delete_post.php', {
      method: "GET",
       data: {
         id: idPost
      },
      success: function(pristigliPodaci, statusTekst, rezultatObj){

          if (rezultatObj.status === 201) {
            // alert("Uspesno obrisan post");
            result.innerHTML = "Uspesno obrisan post";
          }
      },
      error: function(greska){
        // alert("Nije uspelo");
        result.innerHTML = greska.message;
        //console.error(greska);
      }
   });
 });
});

$(document).ready(function(){
$(".edit").click(function(e){
  e.preventDefault();

 var idPostt = this.dataset.id; //$(this).data("mojIdPost");


 $.ajax( 'models/post/edit_post.php',{
    method: "GET",
     data: {
       id: idPostt
    },
    success: function(pristigliPodaci, statusTekst, rezultatObj){
            console.log(pristigliPodaci.naslov);
            console.log(pristigliPodaci.sadrzaj);

            pristigliPodaci = JSON.parse(pristigliPodaci);

            $("#tbNaslov").val(pristigliPodaci.naslov);
            $("#tbSadrzaj").val(pristigliPodaci.sadrzaj);
            $("#idPost").val(pristigliPodaci.idPost);
            $("#btnSubmit").text("Izmena posta");

            $("#contactForm").attr("action","admin/izmeni_post.php");

    },
    error: function(greska){
      // alert("Nije uspelo");
      //result.innerHTML = greska.message;
      console.error(greska);
    }
 });
});
});
