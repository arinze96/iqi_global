$(document).ready(function(){
  $(".delete_data").click(deleteHandler);
  $(".go_back").click(goBack);
  $(".decline_approve").click(processApproveOrDecline)
  $(".add_investments").click(addInvestment)
  $(".add_ref").click(addReferrals)
})


function processApproveOrDecline(e){
  e.preventDefault();
  $button = $(this);
  $actionType = $button.data("action");
  $type = $button.data("type");
  $url = $button.attr("href")
  swal({
    text:`Are you sure you want to ${$actionType} this ${$type}`,
    icon: "info",
    buttons: true
  }).then((responce)=>{
    if(responce == true){
      $.ajax({
        type: "POST",
        url: $url,
        data: {},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function ($response) {
           if($response.success){
            swal({
              text:`${$response.message}`,
              icon: "success",
              buttons: true
            }).then(function(){
              location.reload()
            })
           }else{
            swal({
              text:`${$response.message}`,
              icon: "error",
              buttons: true
            }).then(function(){
              location.reload()
            })
           }
        }
      })
    }
  })
}


function goBack(e){
  e.preventDefault();
  history.go(-1);
}

function deleteHandler(e){
  e.preventDefault();
  $url = $(this).attr("href");
  $type = $(this).attr("data-type")
  swal({
    text:"Are you sure you want to delete this "+$type,
    icon: "info",
    buttons: true
  }).then((responce)=>{
    if(responce == true){
      $.ajax({
        type: "POST",
        url: $url,
        data: {},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function ($response) {
          
          $response = JSON.parse($response);
          if($response.success){
            swal({
              text:$type+" successfully deleted",
              icon: "success",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }else{
            swal({
              text:`${$response.message}`,
              icon: "error",
              buttons: true
            }).then(function(){
              location.reload()
            })
           }
        }
      })
    }
  })
}

function addInvestment(e){
  e.preventDefault();
  $url = $(this).attr("href");
  $type = $(this).attr("data-type")
  swal({
    text:"Are you sure you want to add investment to total balance ",
    icon: "info",
    buttons: true
  }).then((response)=>{
    if(response == true){
      $.ajax({
        type: "POST",
        url: $url,
        data: {},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function ($response) {
          console.log($response);
          // $response = JSON.parse($response);
          if($response.success){
            swal({
              text:"added successfully",
              icon: "success",
              buttons: true
            }).then(res=>{
              location.reload();
            })
          }else{
            swal({
              text:`${$response.message}`,
              icon: "error",
              buttons: true
            }).then(function(){
              // location.reload()
            })
           }
        }
      })
    }
  })
}


function addReferrals(e){
  e.preventDefault();
  $url = $(this).attr("href");
  $type = $(this).attr("data-type")
  swal({
    text:"Are you sure you want to add referral bonus to total balance ",
    icon: "info",
    buttons: true
  }).then((response)=>{
    if(response == true){
      $.ajax({
        type: "POST",
        url: $url,
        data: {},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success: function ($response) {
          console.log($response);
          // $response = JSON.parse($response);
          if($response.success){
            swal({
              text:"added successfully",
              icon: "success",
              buttons: true
            }).then(res=>{
              // location.reload();
            })
          }else{
            swal({
              text:`${$response.message}`,
              icon: "error",
              buttons: true
            }).then(function(){
              // location.reload()
            })
           }
        }
      })
    }
  })
}

