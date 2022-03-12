<div style="width: 300px; border: 1px solid; padding: 15px;">
    <h3>Калькулятор маскитных сеток</h3>
    
<form>

        <label>Высота окна(см)</label> <input type="number" id="Height_mn" name="Height" placeholder="0"> <br>

        <label>Ширина окна(см)</label> <input type="number" id="Width_mn" name="Width" placeholder="0"> <br>

    <hr>

        <p>Вид:</p>

        <input type="radio" name="type_mn" checked value="custom"> <label>Обычная</label> <br>

        <input type="radio" name="type_mn" value="Anticat"> <label>Антикошка</label> <br>

    <hr>

        <p>Цвет:</p>

        <input type="checkbox" id="checkbox_mn" name="checkbox_mn"> <label>Другой цвет</label> <br>

        <p style="font-size: 10px;">*Все цвета кроме "Белый" и "Коричневый" будут стоить дороже.</p>

    <hr>

        <button id="mn_calc">Рассчитать</button>

        <p style="display:inline-block">Сумма: <span id="sum_mn">0</span> руб.</p>
        
</form>    
</div>