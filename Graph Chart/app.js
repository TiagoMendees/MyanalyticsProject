var options = {
    chart: { height: 500, type: "area", width: 1200,},
    dataLabels: { enable:false },
    series: [{ name: "Money", data: result }],
    fill: {
        type: "gradient",
        gradient: {
            shadeIntensity: 4,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100],
        },
    },

    xaxis: {
        categories: [
            "01 Jan",
            "02 Feb",
            "03 March",
            "04 April",
            "05 May",
            "06 June",
            "07 July",
            "08 Aug",
            "09 Sept",
            "10 Oct",
            "11 Nov",
            "12 Dec",
        ],
    },
};

var chart = new ApexCharts(document.querySelector("#chart"),options);
chart.render();