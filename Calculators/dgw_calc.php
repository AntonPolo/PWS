<div style="width: 300px; border: 1px solid; padding: 15px; margin-left: 417px; margin-top: -402px">
    <h3>Калькулятор стеклопакетов</h3>
    
<form>

        <label for="Height_dgw">Высота окна(см)</label> <input type="number" id="Height_dgw" name="Height_dgw"placeholder="0"> <br>

        <label for="Width_dgw">Ширина окна(см)</label> <input type="number" id="Width_dgw" name="Width_dgw" placeholder="0"> <br>

    <hr>

        <p>Колличество камер(стёкол):</p>

        <input type="radio" name="type_dgw" checked value="Single_chamber"> <label>Однокамерный 24мм(2 стекла)</label> <br>

        <input type="radio" name="type_dgw" value="Two_chamber"> <label>Двухкамерный 32мм(3 стекла)</label> <br>

    <hr>

        <p>Дополнительные свойства:</p>

        <input type="checkbox" id="checkbox_1_dgw" name="checkbox_1_dgw"> <label for="_dgw">Солнцезащитное стекло</label> <br>

             <p style="font-size: 10px;">*Защищает интерьер от избыточного солнечного света и вредного ультрафиолета.</p>

        <input type="checkbox" id="checkbox_2_dgw" name="checkbox_2_dgw"> <label for="_dgw">Энергосберегающее стекло</label> <br>

             <p style="font-size: 10px;">*Заметно снижает потери тепла за счет так называемых низкоэмиссионных стекол.</p>

    <hr>

        <button id="dgw_calc">Рассчитать</button>

        <p style="display:inline-block">Сумма: <span id="sum_dgw">0</span> руб.</p>
</form>    
</div>