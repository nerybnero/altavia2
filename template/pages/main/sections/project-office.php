<section class="project-office">
    <div class="container">
        <div class="project-office__body">
            <div class="project-office__top">
                <h2 class="project-office__title">Проектный офис</h2>
                <p class="project-office__desc">Соберемся в команду из разносторонних специалистов, чтобы справиться с
                    уникальными задачами.</p>
            </div>
            <div class="project-office__bottom">
                <div class="project-office__cards">
                    <article class="project-office__card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">1</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Поддержка бизнеса при смене менеджмента</h3>
                            <p class="project-office__card-desc">Мы возьмем на себя весь блок бизнес-процессов в
                                переходный
                                период, реформируем и передадим проект команде нового менеджмента
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">2</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Цифровизация бизнес-процессов</h3>
                            <p class="project-office__card-desc">Оптимизируем и автоматизируем бизнес-процессы в части
                                права, финансов, бухгалтерского и кадрового учета, логистики, закупок, продаж и других
                                процессов.
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">3</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Начинающий бизнес</h3>
                            <p class="project-office__card-desc">Сопровождение любого проекта с этапа зарождения.
                                Поможем
                                встать на на ноги и пойти рука об руку с законом. настроим новые для Вас процессы
                                и превратим их в операционную рутину.
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">4</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Слияния и поглощения</h3>
                            <p class="project-office__card-desc">Поможем найти компромисс в критический для бизнеса
                                момент
                                и сопроводим M&A сделки
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card hidden-card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">5</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Усовершенствование организационной структуры</h3>
                            <p class="project-office__card-desc">Создадим подразделение в структуре вашей компании для
                                эффективного управления и реализации портфеля проектов в вашей компании.
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card hidden-card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">6</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Абонентское сопровождение</h3>
                            <p class="project-office__card-desc">Команда из юристов, финансистов, бухгалтеров и
                                специалистов
                                по кадрам будет ежедневно помогать в решении любых вопросов.
                            </p>
                        </div>
                    </article>
                    <article class="project-office__card hidden-card">
                        <div class="project-office__card-top">
                            <span class="project-office__card-number">7</span>
                        </div>
                        <div class="project-office__card-bottom">
                            <h3 class="project-office__card-title">Правовой аудит</h3>
                            <p class="project-office__card-desc">Комплексный анализ уже состоявшегося бизнеса, в который
                                вы
                                планируете вложить свои время и деньги
                            </p>
                        </div>
                    </article>
                    <?php display_button_secondary('Показать все'); ?>

                    <?php display_button_normal('Читать подробнее'); ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const projectOfficeSection = document.querySelector('.project-office');

            projectOfficeSection.addEventListener('click', function (event) {
                const clickedElement = event.target;

                if (clickedElement.classList.contains('button-secondary')) {
                    clickedElement.id = 'showAllButton';
                    clickedElement.setAttribute('onclick', 'toggleCards()');
                }
            });
        });
        function toggleCards() {
            const cards = document.querySelectorAll('.project-office__card');
            const showAllButton = document.getElementById('showAllButton');

            cards.forEach((card, index) => {
                if (index >= 4) {
                    if (card.classList.contains('hidden-card')) {
                        card.classList.remove('hidden-card');
                    } else {
                        card.classList.add('hidden-card');
                    }
                }
            });
        }

    </script>
</section>