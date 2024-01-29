try {


  /* Revenue - Options */
  var options1 = {
    series: [{
      name: 'Current Year',
      type: 'area',
      data: [6800, 5500, 5100, 4700, 3100, 4300, 5000, 4100, 3100, 4700, 3003, 5000]
    },{
      name: 'Previous Year',
      type: 'line',
      data: [5500, 6900, 4500, 6100, 4300, 5400, 3700, 5200, 4400, 6001, 4003, 4200]
    }],
      chart: {
      type: 'line',
      fontFamily: 'Poppins, sans-serif',
      height: 320,
      dropShadow: {
        enabled: true,
        opacity: 0.1,
        blur: 5,
        left: -7,
        top: 22
      },
      toolbar: {
        show: false
      },
    },
    colors: ['#009688', '#e2a03f'],
    stroke: {
      curve: 'smooth'
    },
    fill: {
      type:'solid',
      opacity: [0.35, 1],
    },
    labels: ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'],
    markers: {
      size: 0
    },
   xaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        show: true
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
            fontSize: '12px',
            fontFamily: 'Poppins, sans-serif',
            cssClass: 'apexcharts-xaxis-title',
        },
      }
    },
    yaxis: {
      labels: {
        formatter: function(value, index) {
          return (value / 1000) + 'M'
        },
        offsetX: -22,
        offsetY: 0,
        style: {
            fontSize: '12px',
            fontFamily: 'Poppins, sans-serif',
            cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      offsetY: -50,
      fontSize: '13px',
      fontFamily: 'Poppins, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
  }
  
  
  /* Target VS Actual Options */
  var options3 = {
    series: [{
      name: 'Target',
      data: [76, 85, 101, 98, 87, 105, 91, 14, 94]
    }, {
      name: 'Actual',
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
    }],
      chart: {
      type: 'bar',
      height: 320,
      fontFamily: 'Poppins, sans-serif',
      toolbar: {
        show: false
      },
    },
    colors: ['#2196f3','#e7515a'],
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      labels: {
        offsetX: 0,
        offsetY: 0,
        show: false,
        style: {
            fontSize: '12px',
            fontFamily: 'Poppins, sans-serif',
            cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    yaxis: {
     labels: {
        offsetX: -22,
        offsetY: 0,
        style: {
            fontSize: '12px',
            fontFamily: 'Poppins, sans-serif',
            cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    grid: {
      borderColor: '#e0e6ed',
      strokeDashArray: 8,
      xaxis: {
          lines: {
              show: true
          }
      },   
      yaxis: {
          lines: {
              show: true,
          }
      },
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: -10
      }, 
    },
    legend: {
      position: 'top',
      horizontalAlign: 'center',
      offsetY: 0,
      fontSize: '13px',
      fontFamily: 'Poppins, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
  }



  /* Earnings Options */
  var options4 = {
    series: [{
      name: "Earnings",
      data: [5000, 4000, 6000, 5000, 7000, 8000, 9000, 10000, 8000]
    }],
    chart: {
      height: 225,
      type: 'line',
      zoom: {
        enabled: false
      },
      fontFamily: 'Poppins, sans-serif',
      toolbar: {
        show: false
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      curve: 'straight'
    },
    yaxis: {
     labels: {
        offsetX: -22,
        offsetY: 0,
        show: false,
        style: {
          fontSize: '12px',
          fontFamily: 'Poppins, sans-serif',
          cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    grid: {
      xaxis: {
        lines: {
          show: false
        }
      },   
      yaxis: {
        lines: {
          show: false,
        }
      }, 
    },
    xaxis: {
      labels: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      axisTicks: {
        show: false,
      },
      tooltip: {
        enabled: false,
      },
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: false,
      },
      x: {
        show: false,
      }
    },
  }




  /* Wallet Balance Options */
  var options2 = {
    series: [90, 75, 67, 83],
    chart: {
    height: 300,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      offsetY: 0,
      startAngle: 0,
      endAngle: 270,
      hollow: {
        margin: 5,
        size: '30%',
        background: 'transparent',
        image: undefined,
      },
      track: {
        show: true,
        startAngle: undefined,
        endAngle: undefined,
        background: '#f2f2f2',
        strokeWidth: '65%',
        opacity: 1,
        margin: 12, 
        dropShadow: {
            enabled: false,
            top: 0,
            left: 0,
            blur: 3,
            opacity: 0.5
        }
      },
      dataLabels: {
        name: {
          fontSize: '15px',
          fontFamily: 'Poppins, sans-serif',
          fontWeight: 700,
        },
        value: {
          fontSize: '15px',
          fontFamily: 'Poppins, sans-serif',
          fontWeight: 700,
        },
        total: {
          show: true,
          label: 'Total',
          color: '##515365',
          fontWeight: 700,
          formatter: function (w) {
            return 1212
          }
        }
      }
    }
  },
  colors: ['#2196f3','#009688','#e2a03f','#e7515a',],
  labels: ['Balance', 'Income', 'Referral', 'Expense'],
  }
  
  
  

  /* Registration Options */
  var options5 = {
    series: [10, 15, 25, 20, 30, 10],
    chart: {
      height: 350,
      type: 'pie',
      fontFamily: 'Poppins, sans-serif',
    },
    dataLabels: {
      enabled: false,
      
    },
    colors: ['#8dbf42', '#5c1ac3', '#e2a03f', '#2196f3', '#e7515a', '#3b3f5c'],
    labels: ['ETS', 'Monthly Rental', 'Corp Retail', 'Daily Rental', 'Pickup & Drop', 'Outstation'],
    legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      offsetY: 0,
      fontSize: '13px',
      fontFamily: 'Poppins, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 20,
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 10
      }
    },
    tooltip: {
      enabled: true,
      theme: 'dark',
      marker: {
        show: true,
      },
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  }


  /* Registration Options by trip routes */
  var options6 = {
    series: [30, 30, 20, 20],
    chart: {
      height: 350,
      type: 'pie',
      fontFamily: 'Poppins, sans-serif',
    },
    dataLabels: {
      enabled: false,
    },
    colors: ['#8dbf42', '#5c1ac3', '#e2a03f', '#2196f3'],
    labels: ['vizag --> Nad', 'Nad --> Pendurthi', 'Ramatakies --> Kothavalas', 'Nad --> Gajuwakha'],
    legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      offsetY: 0,
      fontSize: '13px',
      fontFamily: 'Poppins, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 20,
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 10
      }
    },
    tooltip: {
      enabled: true,
      theme: 'dark',
      marker: {
        show: true,
      },
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  }

  /* Registration Options by customer */
  var options7 = {
    series: [5, 10, 25, 10, 20, 30],
    chart: {
      height: 350,
      type: 'pie',
      fontFamily: 'Poppins, sans-serif',
    },
    dataLabels: {
      enabled: false,
    },
    colors: ['#8dbf42', '#5c1ac3', '#e2a03f', '#2196f3', '#e7515a', '#3b3f5c'],
    labels: ['Rajesh', 'Suresh', 'Vamsi', 'Rajesh', 'Surya', 'Praveen'],
    legend: {
      position: 'bottom',
      horizontalAlign: 'center',
      offsetY: 0,
      fontSize: '13px',
      fontFamily: 'Poppins, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 20,
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 10
      }
    },
    tooltip: {
      enabled: true,
      theme: 'dark',
      marker: {
        show: true,
      },
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 200
        },
        legend: {
          position: 'bottom'
        }
      }
    }]
  }
  
  



  /*************************** Render Charts Script **************************/

  /* Revenue - Render */
  var chart1 = new ApexCharts(
    document.querySelector("#revenue"),
    options1
  );
  chart1.render();


  /* Target VS Actual - Render */
  var chart = new ApexCharts(
    document.querySelector("#targetvsactual"),
    options3
  );
  chart.render();

  /* Earnings Render */
  var chart = new ApexCharts(
    document.querySelector("#earnings"),
    options4
  );
  chart.render();

  /* Wallet Balance Render */
  var chart = new ApexCharts(
    document.querySelector("#walletBalance"),
    options2
  );
  chart.render();


  /* Registration Render */
  var chart = new ApexCharts(
    document.querySelector("#registration-types"),
    options5
  );
  chart.render();
  
  var chart = new ApexCharts(
    document.querySelector("#registration-types2"),
    options6
  );
  chart.render();

  var chart = new ApexCharts(
    document.querySelector("#registration-types3"),
    options7
  );
  chart.render();

  var chart = new ApexCharts(
    document.querySelector("#registration-types4"),
    options5
  );
  chart.render();

  /*************************** Other Script **************************/
  
  var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
    mode: "range",
  });



} catch(e) {
    console.log(e);
}