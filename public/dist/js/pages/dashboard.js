/*
 *   Copyright (c) 2020 
 *   All rights reserved.
 */



$(function () {
    "use strict";

    // LINE CHART
    // $.ajax({
    //     url: "dashboard/accsess",
    //     cache: false,
    //     success: function(html){
       
    //     }
    //   });

    $.ajax({
        url: "dashboard/accsess",
        cache: false,
        success: function(datas){
console.log(datas);

    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data:datas,
      xkey: 'x',
      ykeys: ['title'],
      labels: ['title'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });
}
});
    
  });