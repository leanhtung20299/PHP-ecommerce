$(document).ready(
  function(){
    $.ajax({
      url:"ChiengAndata.php",
      type:"GET",
      success: function(data){
        console.log(data);
        var dataJS = data;
        var maVP = [];
        var tienPhat = [];
        for(var i in data){
          maVP.push("ID = "+ data[i].maVP)
          tienPhat.push(data[i].tienPhat);
        }
        var chartdata = {
          labels: maVP,
          datasets: [
            {
              label: 'Tiền phạt',
              backgroundColor: 'rgba(255, 99, 132, 0.5)',
              borderColor: 'rgba(255, 99, 132, 1)',
              hoverBackgroundColor: 'rgba(255, 99, 132, 1)',
              hoverBorderColor: 'rgba(255, 99, 132, 1)',
              data: tienPhat
            }
          ]
        };
        var ctx = $("#ChiengAncanvas");
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data){
        console.log(data);
      }
    })

});
