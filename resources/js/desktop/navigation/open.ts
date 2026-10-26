// Время анимации расширения меню (совпадает с transition: width в SCSS)
const NAV_EXPAND_DURATION = 10;

// Время анимации исчезновения текста (совпадает с transition: opacity в SCSS)
const TEXT_FADE_DURATION = 200;

function initDesktopNavigationOpen() {
    const navigation = document.getElementById('DESKTOP-NAVIGATION');
    const linksContainer = document.getElementById('DESKTOP-NAVIGATION-PAGES_LINKS');
    const createArticleBtn = document.getElementById('DESKTOP-NAVIGATION-PAGES_LINKS-CREATE_ARTICLE');

    if (!navigation || !linksContainer) return;

    const labels = linksContainer.querySelectorAll<HTMLSpanElement>('a span');
    if (!labels.length) return;

    let timeoutId: number | null = null;

    const showLabels = () => {
        labels.forEach((label: HTMLSpanElement) => {
            label.style.display = 'unset';
            requestAnimationFrame(() => {
                label.style.opacity = '1';
            });
        });
    };

    const hideLabels = () => {
        labels.forEach((label: HTMLSpanElement) => {
            label.style.opacity = '0';
        });
    };

    // Инициализация (моментально прячем при загрузке)
    labels.forEach((label: HTMLSpanElement) => {
        label.style.display = 'none';
        label.style.opacity = '0';
    });

    navigation.addEventListener('mouseenter', () => {
        if (timeoutId !== null) window.clearTimeout(timeoutId);

        // ДОБАВЛЯЕМ КЛАСС КНОПКЕ ПРИ ОТКРЫТИИ
        if (createArticleBtn) {
            createArticleBtn.classList.add('L-NAVIGATION-link_screaming');
        }

        // Ждем, пока меню расширится, и только потом показываем текст
        timeoutId = window.setTimeout(() => {
            showLabels();
            timeoutId = null;
        }, NAV_EXPAND_DURATION);
    });

    navigation.addEventListener('mouseleave', () => {
        if (timeoutId !== null) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }

        // УБИРАЕМ КЛАСС КНОПКЕ ПРИ ЗАКРЫТИИ
        if (createArticleBtn) {
            createArticleBtn.classList.remove('L-NAVIGATION-link_screaming');
        }

        // 1. Запускаем плавное исчезновение текста
        hideLabels();

        // 2. Ждем, пока текст исчезнет, и только потом убираем его из потока (display: none)
        window.setTimeout(() => {
            // Проверка на случай, если пользователь быстро вернул мышку обратно
            if (!navigation.matches(':hover')) {
                labels.forEach((label: HTMLSpanElement) => {
                    label.style.display = 'none';
                });
            }
        }, TEXT_FADE_DURATION);
    });
}

initDesktopNavigationOpen();
