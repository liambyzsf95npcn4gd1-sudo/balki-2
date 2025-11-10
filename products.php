<?php
$pageTitle = "Продукция — Сварные двутавровые балки | DoorHan";
$pageDescription = "Ассортимент сварных двутавровых балок: стандартные, переменного сечения, перфорированные. Онлайн-калькулятор для расчета веса и стоимости балки.";
$pageKeywords = "сварная балка, двутавровая балка, перфорированная балка, балка переменного сечения, размеры сварных балок, калькулятор балки";
include 'includes/header.php';
?>

<div class="container">
    <h1>Наша продукция</h1>

    <!-- Standard Beams Section -->
    <section id="standard-beams" class="my-5">
        <h2>Стандартные сварные балки</h2>
        <p>Мы производим сварные двутавровые балки по стандартным и индивидуальным размерам. Ниже представлена таблица типовых размеров.</p>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Высота (мм)</th>
                    <th>Ширина полки (мм)</th>
                    <th>Толщина стенки (мм)</th>
                    <th>Толщина полки (мм)</th>
                    <th>Масса (кг/м)</th>
                    <th>Момент сопротивления (см³)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>500</td><td>200</td><td>8</td><td>12</td><td>56</td><td>1200</td></tr>
                <tr><td>500</td><td>200</td><td>10</td><td>16</td><td>68</td><td>1550</td></tr>
                <tr><td>800</td><td>300</td><td>10</td><td>16</td><td>105</td><td>3400</td></tr>
                <tr><td>1200</td><td>400</td><td>12</td><td>20</td><td>180</td><td>8200</td></tr>
            </tbody>
        </table>
    </section>

    <!-- Custom Beams Section -->
    <div class="row my-5">
        <div class="col-md-6">
            <h3>Балки переменного сечения</h3>
            <p>Экономия металла до 26% за счет оптимального распределения нагрузок. Идеально для рамных конструкций.</p>
            <img src="https://via.placeholder.com/500x300.png?text=Балка+переменного+сечения" class="img-fluid" alt="Схема балки переменного сечения">
        </div>
        <div class="col-md-6">
            <h3>Перфорированные балки</h3>
            <p>Облегченные балки с отверстиями в стенке для прокладки коммуникаций. Снижение веса без потери прочности.</p>
            <img src="https://via.placeholder.com/500x300.png?text=Перфорированная+балка" class="img-fluid" alt="Схема перфорированной балки">
        </div>
    </div>

    <!-- Beam Calculator Section -->
    <section id="calculator" class="my-5 p-4 bg-light border rounded">
        <h2>Калькулятор балки</h2>
        <form id="beam-calculator-form">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="beamHeight" class="form-label">Высота (H), мм</label>
                    <input type="number" class="form-control" id="beamHeight" value="500" min="200" max="2000" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="flangeWidth" class="form-label">Ширина полки (B), мм</label>
                    <input type="number" class="form-control" id="flangeWidth" value="200" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="webThickness" class="form-label">Толщина стенки (s), мм</label>
                    <input type="number" class="form-control" id="webThickness" value="8" required>
                </div>
                 <div class="col-md-3 mb-3">
                    <label for="flangeThickness" class="form-label">Толщина полки (t), мм</label>
                    <input type="number" class="form-control" id="flangeThickness" value="12" required>
                </div>
            </div>
        </form>
        <div id="calculator-results" class="mt-4">
            <h4>Результаты расчета:</h4>
            <p><strong>Масса 1 п.м. балки:</strong> <span id="result-weight">--</span> кг</p>
            <p><strong>Приблизительная стоимость 1 п.м.:</strong> <span id="result-cost">--</span> руб.</p>
            <p><strong>Экономия по сравнению с прокатной балкой:</strong> <span id="result-saving">--</span> %</p>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
