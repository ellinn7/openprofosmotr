<div class="blank percent100">
    <div class="h2w to-cut-bottom">
        <div class="percent75 div-in-line">
            <h4 class="h4-blank text-center">ООО Медицинский центр Аксион
            <br>(ООО "Медицинский центр "Аксион")</h4>
        </div>
        <div class="percent25 div-in-line text-right">
                Медицинская документация <br>
                Форма № 025/у <br>
                Утверждена <br>
                Минздравом СССР <br>
                № 1338 1987 г.
        </div>
        <h3 class="h3-blank text-center">Периодический (предварительный) медицинский осмотр</h3>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Фамилия</div>
            <div class="percent75 div-in-linebottomline text-center"><b><?=$model->surname?></b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Имя</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->name?></b></div>
            <div class="percent25 div-in-line">Пол</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->sex?></b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Отчество</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->patron?></b></div>
            <div class="percent25 div-in-line">Инвалидность</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->disability?> &nbsp;</b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Дата рождения</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->birthday?></b></div>
            <div class="percent25 div-in-line">СНИЛС</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->snils?></b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Паспорт</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->passport_series?> <?=$model->passport_number?> &nbsp;</b></div>
            <div class="percent25 div-in-line">Полис ОМС</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->insurance_number?> &nbsp;</b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Страховая компания</div>
            <div class="percent75 div-in-line bottomline text-center"><b><?=$model->insurance_company?> &nbsp;</b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Адрес</div>
            <div class="percent75 div-in-line bottomline text-center"><b><?=$model->addresse_reg?> &nbsp;</b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Место работы</div>
            <div class="percent75 div-in-line bottomline text-center"><b><?=$model->firm?> <?=$model->dep?></b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Профессия/должность</div>
            <div class="percent75 div-in-line bottomline text-center"><b><?=$model->passport_series?> &nbsp;</b></div>
        </div>
        <div class="percent100 pspace">
            <div class="percent25 div-in-line">Контактный телефон</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->phone?> &nbsp;</b></div>
            <div class="percent25 div-in-line">Стаж</div>
            <div class="percent25 div-in-line bottomline text-center"><b><?=$model->seniority?> мес.</b></div>
        </div>
    </div>
    
    <div class="h2w">
        <p>СОГЛАСИЕ НА ОБРАБОТКУ ПЕРСОНАЛЬНЫХ ДАННЫХ</p>
        <p>
            Я, нижеподписавшийся, <?=$model->surname?> <?=$model->name?> <?=$model->patron?>,<br>
            проживающий по адресу <?=$model->addresse_reg?>, пасп. <?=$model->passport_number?> <?=$model->passport_series?> выдан <?=$model->passport_given_date?>.
        </p>
        <p>В соответствии с требованиями статьи 9 Федерального закона от 27.07.2006г. "О персональных данных" №152-ФЗ, подтверждаю свое согласие на обработку ЛПУ ООО "Медицинский центр "Аксион" (далее - Оператор) моих персональных данных, включающих: фамилию, имя, отчество, пол, дату рождения, адрес места жительства, контактные телефоны, номер полиса ОМС (ДМС), СНИЛС, данные о состоянии моего здоровья, заболеваниях, случаях обращения за медицинской помощью в медико-профилактических целях, в целях установления медицинского диагноза и оказания медицинских услуг, а так же право на передачу такой информации третьим лицам при условии что их обработка осуществляется лицом, обязанным сохранять врачебную тайну.</p>
        <p>В процессе оказания Оператором мне медицинской помощи я предоставляю право медицинским работникам передавать мои персональные данные,  содержащие сведения, составляющие врачебную тайну, другим должностным лицам Оператора в интересах моего обследования и лечения.</p>
        <p>Предоставляю Оператору право осуществлять все действия с моими персональными данными, включая сбор, систематизацию, накопление, хранение, обновление, изменения, использование, передачу,обезличивание, блокирование, уничтожение. Оператор в праве обрабатывать мои персональные данные посредством внесения их в электронную базу данных, включение в списки (реестры) и отчетные формы, предусмотренные документами, регламентирующими предоставление отчетных данных  (документов) по ОМС (договорам ДМС).</p>
        <p>Оператор имеет право во исполнение своих обязательств по работе в системе ОМС (по договору ДМС) на обмен (прием и передачу) моими персональными данными со страховыми медицинскими организациями и территориальным фондом ОМС с использованием машинных носителей или по каналам связи, с соблюдением мер, обеспечивающих их защиту от не санкционированного доступа, при условии, что их прием и обработка будут осуществляться лицом, обязанным сохранять профессиональную тайн. Срок хранения моих персональных данных соответствует  сроку хранения первичных медицинских документов и составляет двадцать пять лет для стационара, пять лет - для поликлиники. Передача моих персональных данных иным лицам или иное из разглашение может осуществляться только с моего письменного согласия. Настоящее согласие дано мной <?=$model->surname?> <?=$model->name?> <?=$model->patron?> и действует бессрочно.</p>
        <p>Я оставляю за собой право отозвать согласие посредством составления соответствующего письменного  документа,который может быть направлен мной в адрес Оператора по почте заказным письмом с уведомлением о вручении, либо вручен лично под расписку представителю Оператора. В случае получения моего письменного заявления об отказе настоящего согласия на обработку персональны данных Оператор обязан прекратить из обработку в течение периода времени, необходимого для завершения взаиморасчетов по оплате оказанной мне до этого медицинской помощи.</p>
        <div class="percent20 div-in-line">Контактный телефон:</div>
        <div class="percent15 div-in-line bottomline">&nbsp;</div>
        <div class="percent40 div-in-line">Подпись субъекта персональных данных:</div>
        <div class="percent10 div-in-line"></div>
        <div class="percent5 div-in-line">Дата:</div>
    </div>
</div>