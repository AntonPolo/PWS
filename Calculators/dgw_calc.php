<div class="calc" id="calc_dgw_id">
    <h3>Калькулятор стеклопакетов</h3>

    <form>

        <label for="Height_dgw">Высота стеклопакета(см):</label> <input type="number" id="Height_dgw" name="Height_dgw" placeholder="0">

        <label for="Width_dgw">Ширина стеклопакета(см):</label> <input type="number" id="Width_dgw" name="Width_dgw" placeholder="0">

        <hr>

        <p>Колличество камер(стёкол):</p>
        <div class="radio">
            <input type="radio" id="type_1_dgw" name="type_dgw" checked value="Single_chamber"> <label for="type_1_dgw">Однокамерный 24мм(2 стекла)</label>

            <input type="radio" id="type_2_dgw" name="type_dgw" value="Two_chamber"> <label for="type_2_dgw">Двухкамерный 32мм(3 стекла)</label>
        </div>

        <hr>

        <p>Дополнительные свойства:</p>
        <div class="check">
            <div>
                <input type="checkbox" id="checkbox_1_dgw" name="checkbox_1_dgw"> <label for="checkbox_1_dgw">Солнцезащитное стекло</label>

                <p class="hints">*Защищает интерьер от избыточного солнечного света и вредного ультрафиолета.</p>
            </div>
            <div>
                <input type="checkbox" id="checkbox_2_dgw" name="checkbox_2_dgw"> <label for="checkbox_2_dgw">Энергосберегающее стекло</label>

                <p class="hints">*Заметно снижает потери тепла за счет так называемых низкоэмиссионных стекол.</p>
            </div>
        </div>
        <hr>

        <button id="dgw_calc">Рассчитать</button>

        <div class="result" style="display:inline-block">
            <div class="sum">Сумма:</div>
            <span id="sum_dgw" class="sum_mn">0</span> <span class="sum_mn">руб.</span>
        </div>

    </form>
</div>