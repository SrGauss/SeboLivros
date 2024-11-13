<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="LogoTrain.png" type="image/x-icon">
    <link rel="stylesheet" href="STyleConta.css">
    <title>Conta</title>
    <style>
        /* Estilo para as tabs */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .tab button {
            background-color: inherit;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style>
</head>
<body>
    <div class="LeftBar">
        <?php
        session_start();

        if (empty($_SESSION['nome'])) {
            header("Location: index.php", true, 301);
            exit();
        } else {
            $Nome = $_SESSION['nome'];
            $Image = $_SESSION['image'];

            echo "<img class='UserIMG' src='$Image'>";
            echo "<p class='UserNAME'>" . $Nome . "</p>";
        }
        ?>
        <a href="javascript:history.back()"><button class="back"><p>←</p></button></a>
        <a href="sair.php" class="Exit"><button>Sair da conta</button></a>
    </div>

    <main>
        <h1>Seus livros registrados:</h1>
        <hr>

        <!-- Tabs -->
        <div class="tab" id="tabButtons"></div>

        <!-- Tab contents -->
        <div id="tabContents"></div>
    </main>

    <script>
        function openTab(evt, tabName) {
            const tabcontent = document.getElementsByClassName("tabcontent");
            for (let i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            const tablinks = document.getElementsByClassName("tablinks");
            for (let i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function loadTabs() {
            fetch('get_total_rows.php')
                .then(response => response.json())
                .then(data => {
                    const totalRows = data.total;
                    const rowsPerPage = 3;
                    const totalTabs = Math.ceil(totalRows / rowsPerPage);

                    const tabButtons = document.getElementById("tabButtons");
                    const tabContents = document.getElementById("tabContents");

                    for (let i = 0; i < totalTabs; i++) {
                        const tabId = `Tab${i + 1}`;

                        // Create tab button
                        const tabButton = document.createElement("button");
                        tabButton.className = "tablinks";
                        tabButton.textContent = ` ${i + 1}`;
                        tabButton.onclick = function (event) {
                            openTab(event, tabId);
                        };
                        tabButtons.appendChild(tabButton);

                        // Create tab content
                        const tabContent = document.createElement("div");
                        tabContent.id = tabId;
                        tabContent.className = "tabcontent";
                        tabContents.appendChild(tabContent);

                        // Load tab content via AJAX
                        fetch(`load_books.php?offset=${i * rowsPerPage}`)
                            .then(response => response.text())
                            .then(data => {
                                tabContent.innerHTML = data;
                                if (i === 0) {
                                    // Abre a primeira aba automaticamente
                                    tabButton.click();
                                }
                            })
                            .catch(error => console.error('Erro ao carregar livros:', error));
                    }
                })
                .catch(error => console.error('Erro ao obter total de registros:', error));
        }

        // Carregar as tabs ao carregar a página
        window.onload = loadTabs;
    </script>
</body>
</html>
