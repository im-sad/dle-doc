<div class="upCont" style="display:block !important">
	<div class="section">

		<h3>В строке формата даты, распознаются следующие символы:</h3>
		<ul class="listTime">


			<li><b>g</b> - час, 12-часовой формат без ведущих нулей (от 1 до 12)</li>
			<li><b>h</b> - час, 12-часовой формат (от 01 до 12)</li>
			<li><b>a</b> - am или pm</li>
			<li><b>A</b> - AM или PM</li>
			<li><b>G</b> - час, 24-часовой формат без ведущих нулей (от 0 до 23)</li>
			<li><b>H</b> - час, 24-часовой формат (от 00 до 23)</li>

			<li><b>i</b> - минуты (от 00 до 59)</li>
			<li><b>I</b> (заглавная i) - "1", если Daylight Savings Time, "0" - в противном случае.</li>

			<li><b>s</b> - секунды (от 00 до 59)</li>
			<li><b>U</b> - секунды эпохи Unix Epoch (начиная с January 1 1970 00:00:00 GMT)</li>
			
			<li><b>d</b> - день (число) месяца, 2 цифры с ведущим нулём, если необходимо; т. е. от "01" до "31"</li>
			<li><b>j</b> - день (число) месяца без ведущих нулей; т.е. от "1" до "31"</li>
			<li><b>D</b> - день недели, буквенный, 3 буквы; например, "Fri"</li>
			<li><b>l</b> ('L' в нижнем регистре) - день недели, буквенный; например, "Friday"</li>
			<li><b>w</b> - день недели, числовой, т.е. от "0" (Sunday) до "6" (Saturday)</li>

			<li><b>F</b> - месяц, буквенный (например January)</li>
			<li><b>M</b> - месяц, буквенный, 3 буквы (например Jan)</li>
			<li><b>n</b> - месяц без ведущих нулей (от 1 до 12)</li>
			<li><b>m</b> - месяц (от 01 до 12)</li>
			<li><b>t</b> - количество дней в данном месяце (от 28 до 31)</li>

			<li><b>Y</b> - год, 4 цифры (например 1999)</li>
			<li><b>y</b> - год, 2 цифры (например 99)</li>
			<li><b>z</b> - день года (от 0 до 365)</li>
			<li><b>L</b> - boolean, указывающее, високосный ли год; т.е. "0" или "1"</li>

			<li><b>B</b> - время Swatch Internet</li>
			<li><b>O</b> - разница с временем по Гринвичу, в часах; например, "+0200"</li>
			<li><b>r</b> - RFC 822 формат даты; например, "Thu, 21 Dec 2000 16:01:07 +0200" (введён в PHP 4.0.4)</li>
			<li><b>S</b> - простой английский суффикс для дня (числа) месяца, 2 символа; т.е. "st", "nd", "rd" или "th"</li>
			<li><b>T</b> - установка Timezone/Часовой пояс на данной машине; например, "EST" или "MDT"</li>
			<li><b>W</b> - ISO-8601 номер недели в году, недели начинаются с понедельника/Monday (введено в PHP 4.1.0)</li>
			<li><b>Z</b> - смещение часового пояса, в секундах (т.е. от "-43200" до "43200"). Смещение часовых поясов к западу от UTC всегда отрицательное, а для поясов к востоку от UTC - всегда положительное.</li>
		</ul>

	</div>
</div>