<div class="calc" id="calc_mn_id">
    <h3>Калькулятор маскитных сеток</h3>

    <form>

        <label>Высота окна(см):</label> <input type="number" id="Height_mn" name="Height" placeholder="0">

        <label>Ширина окна(см):</label> <input type="number" id="Width_mn" name="Width" placeholder="0">

        <hr>


        <p>Вид:</p>
        <div class="radio">
            <input type="radio" id="type_mn1" name="type_mn" checked value="custom"><label for="type_mn1">Обычная</label>

            <input type="radio" id="type_mn2" name="type_mn" value="Anticat"><label for="type_mn2">Антикошка</label>
        </div>

        <hr>


        <p>Цвет:</p>
        <div class="check">
            <div>
                <input type="checkbox" id="checkbox_mn" name="checkbox_mn"> <label for="checkbox_mn">Другой цвет</label>

                <p class="hints">*Все цвета кроме "Белый" и "Коричневый" будут стоить дороже.</p>
            </div>
        </div>

        <hr>

        <button id="mn_calc">Рассчитать</button>

        <div class="result" style="display:inline-block">
            <div class="sum">Сумма:</div>
                <span id="sum_mn" class="sum_mn">0</span> <span class="sum_mn">руб.</span>
        </div>
    </form>
</div>