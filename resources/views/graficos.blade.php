<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Temperatura</title>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>

        body {
            background-color: #1a1a1a; /* Fundo escuro */
            color: white; /* Cor do texto em branco para melhor legibilidade */
            font-family: Arial, sans-serif;
        }

        #chart {
            max-width: 100%;
            margin: 15px auto;
        }
    </style>

</head>
<body>

<div id="chart"></div>

<script>
    // Gerar dados aleatórios de temperatura
    function getRandomTemperature(min, max) {
        return (Math.random() * (max - min) + min).toFixed(1); // Retorna um número aleatório com uma casa decimal
    }

    // Criar arrays para as horas e temperaturas
    const hours = [];
    const temperatures = [];
    for (let i = 0; i <= 24; i++) {
        hours.push(`${i}h`);
        temperatures.push(getRandomTemperature(15, 30)); // Temperaturas entre 15°C e 30°C
    }

    // Configuração do gráfico
    var options = {
        chart: {
            type: 'line',
            height: 200,
            zoom: {
                enabled: false
            },
            background: '#1a1a1a' // Fundo do gráfico
        },
        series: [{
            name: 'Temperatura (°C)',
            data: temperatures
        }],
        xaxis: {
            categories: hours,
            
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo X
                }
            }
        },
        yaxis: {
            title: {
                text: 'Temperatura (°C)',
                style: {
                    color: '#ffffff' // Cor do texto do título do eixo Y
                }
            },
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo Y
                }
            },
            min: 10,
            max: 35
        },
        markers: {
            size: 5,
            colors: ['#fff'],
            strokeColors: '#008ffb', // Cor da borda dos marcadores
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        stroke: {
            curve: 'smooth', // Faz o gráfico ser menos reto
            width: 3, // Largura da linha
            colors: ['#008ffb'] // Cor da linha do gráfico
        },
        tooltip: {
            theme: 'dark', // Tema do tooltip
            style: {
                fontSize: '12px',
                color: '#ffffff' // Cor do texto do tooltip
            }
        }
    };

    // Renderizar o gráfico
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

</script>

<!-- Gráfico de Umidade -->
<div id="humidityChart" class="chart"></div>

<script>
    // Gerar dados aleatórios de umidade
    function getRandomHumidity(min, max) {
        return (Math.random() * (max - min) + min).toFixed(1); // Retorna um número aleatório com uma casa decimal
    }

    // Criar arrays para as horas e umidade
    const humidityHours = [];
    const humidity = [];
    for (let i = 0; i <= 24; i++) {
        humidityHours.push(`${i}h`);
        humidity.push(getRandomHumidity(40, 50)); // Umidade entre 40% e 50%
    }

    // Configuração do gráfico de umidade
    var humidityOptions = {
        chart: {
            type: 'line',
            height: 200,
            zoom: {
                enabled: false
            },
            background: '#1a1a1a' // Fundo do gráfico
        },
        series: [{
            name: 'Umidade (%)',
            data: humidity
        }],
        xaxis: {
            categories: humidityHours,
            
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo X
                }
            }
        },
        yaxis: {
            title: {
                text: 'Umidade (%)',
                style: {
                    color: '#ffffff' // Cor do texto do título do eixo Y
                }
            },
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo Y
                }
            },
            min: 35,
            max: 55
        },
        markers: {
            size: 5,
            colors: ['#fff'],
            strokeColors: '#00E396', // Cor da borda dos marcadores
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        stroke: {
            curve: 'smooth', // Faz o gráfico ser menos reto
            width: 3, // Largura da linha
            colors: ['#00E396'] // Cor da linha do gráfico
        },
        tooltip: {
            theme: 'dark', // Tema do tooltip
            style: {
                fontSize: '12px',
                color: '#ffffff' // Cor do texto do tooltip
            }
        }
    };

    // Renderizar o gráfico de umidade
    var humidityChart = new ApexCharts(document.querySelector("#humidityChart"), humidityOptions);
    humidityChart.render();
</script>

<!-- Gráfico de Luz -->
<div id="lightChart" class="chart"></div>

<script>
    // Gerar dados aleatórios de luz
    function getRandomLight(min, max) {
        return (Math.random() * (max - min) + min).toFixed(1); // Retorna um número aleatório com uma casa decimal
    }

    // Criar arrays para as horas e luz
    const lightHours = [];
    const light = [];
    for (let i = 0; i <= 24; i++) {
        lightHours.push(`${i}h`);
        light.push(getRandomLight(15, 100)); // Luz entre 15 e 100
    }

    // Configuração do gráfico de luz
    var lightOptions = {
        chart: {
            type: 'line',
            height: 200,
            zoom: {
                enabled: false
            },
            background: '#1a1a1a' // Fundo do gráfico
        },
        series: [{
            name: 'Luz (Lux)',
            data: light
        }],
        xaxis: {
            categories: lightHours,
            
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo X
                }
            }
        },
        yaxis: {
            title: {
                text: 'Luz (Lux)',
                style: {
                    color: '#ffffff' // Cor do texto do título do eixo Y
                }
            },
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo Y
                }
            },
            min: 10,
            max: 105
        },
        markers: {
            size: 5,
            colors: ['#fff'],
            strokeColors: '#FFD700', // Cor da borda dos marcadores
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        stroke: {
            curve: 'smooth', // Faz o gráfico ser menos reto
            width: 3, // Largura da linha
            colors: ['#FFD700'] // Cor da linha do gráfico
        },
        tooltip: {
            theme: 'dark', // Tema do tooltip
            style: {
                fontSize: '12px',
                color: '#ffffff' // Cor do texto do tooltip
            }
        }
    };

    // Renderizar o gráfico de luz
    var lightChart = new ApexCharts(document.querySelector("#lightChart"), lightOptions);
    lightChart.render();

</script>
<!-- Gráfico de Movimento -->
<div id="movementChart" class="chart"></div>

<script>
    // Gerar dados aleatórios de movimento
    function getRandomMovement(min, max) {
        return (Math.random() * (max - min) + min).toFixed(1); // Retorna um número aleatório com uma casa decimal
    }

    // Criar arrays para as horas e movimento
    const movementHours = [];
    const movement = [];
    for (let i = 0; i <= 24; i++) {
        movementHours.push(`${i}h`);
        movement.push(getRandomMovement(0, 120)); // Movimento entre 0 e 120 km/h
    }

    // Configuração do gráfico de movimento
    var movementOptions = {
        chart: {
            type: 'line',
            height: 200,
            zoom: {
                enabled: false
            },
            background: '#1a1a1a' // Fundo do gráfico
        },
        series: [{
            name: 'Movimento (km/h)',
            data: movement
        }],
        xaxis: {
            categories: movementHours,
            
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo X
                }
            }
        },
        yaxis: {
            title: {
                text: 'Movimento (km/h)',
                style: {
                    color: '#ffffff' // Cor do texto do título do eixo Y
                }
            },
            labels: {
                style: {
                    colors: '#ffffff' // Cor das etiquetas do eixo Y
                }
            },
            min: 0,
            max: 130
        },
        markers: {
            size: 5,
            colors: ['#fff'],
            strokeColors: '#dd3f56', // Cor da borda dos marcadores
            strokeWidth: 2,
            hover: {
                size: 7
            }
        },
        stroke: {
            curve: 'smooth', // Faz o gráfico ser menos reto
            width: 3, // Largura da linha
            colors: ['#dd3f56'] // Cor da linha do gráfico
        },
        tooltip: {
            theme: 'dark', // Tema do tooltip
            style: {
                fontSize: '12px',
                color: '#ffffff' // Cor do texto do tooltip
            }
        }
    };

    // Renderizar o gráfico de movimento
    var movementChart = new ApexCharts(document.querySelector("#movementChart"), movementOptions);
    movementChart.render();
</script>
</body>
</html>
