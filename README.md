# Weblu Client Panel

Custom WordPress plugin for branded Weblu client panel.

---

## Opis pomysłu

Celem pluginu jest stworzenie nowoczesnego, intuicyjnego panelu klienta Weblu, który pozwoli użytkownikom (klientom) w jednym miejscu:
- przeglądać swoje usługi (np. hosting, strony, domeny),
- zarządzać danymi kontaktowymi,
- kontaktować się z supportem,
- przeglądać faktury i płatności,
- otrzymywać powiadomienia,
- korzystać z panelu w pełni zbrandowanego (logo, kolory Weblu).

Panel będzie dostępny po zalogowaniu pod `/panel` i zintegrowany z WordPressem oraz ewentualnie innymi systemami (np. API Weblu / system fakturujący).

---

## Docelowa struktura panelu

```
weblu-client-panel/
│
├── assets/
│   ├── weblu-client-panel.css       # Style panelu
│   ├── weblu-logo.png               # Logo marki Weblu
│   └── ... (inne zasoby: ikony, grafiki)
│
├── inc/
│   ├── class-panel.php              # Główny panel - logika i renderowanie
│   ├── class-services.php           # Obsługa usług klienta (hosting, strony, domeny)
│   ├── class-account.php            # Zarządzanie kontem i danymi kontaktowymi
│   ├── class-support.php            # Kontakt z supportem / zgłoszenia
│   ├── class-payments.php           # Faktury, płatności
│   ├── class-notifications.php      # Powiadomienia dla klienta
│   └── ... (ew. helpery, integracje)
│
├── templates/
│   ├── panel-main.php               # Widok główny panelu
│   ├── panel-services.php           # Widok usług
│   ├── panel-account.php            # Widok i edycja profilu
│   ├── panel-support.php            # Widok kontaktu z supportem
│   ├── panel-payments.php           # Widok faktur/płatności
│   ├── panel-notifications.php      # Widok powiadomień
│   └── ... (inne szablony)
│
├── weblu-client-panel.php           # Plik główny pluginu (bootstrap)
├── README.md                        # Dokumentacja
└── .keep                            # Placeholder na zasoby
```

---

## Roadmapa krok po kroku

1. **MVP (Minimum Viable Product)**
   - Panel logowania + endpoint `/panel`
   - Wyświetlanie powitania i przykładowych usług
   - Branding: logo, kolory, responsywny design

2. **Usługi klienta**
   - Pobieranie i wyświetlanie usług klienta (WordPress, hosting, domeny)
   - Integracja z API Weblu (jeśli istnieje)

3. **Zarządzanie kontem**
   - Edycja danych kontaktowych
   - Możliwość zmiany hasła

4. **Kontakt z supportem**
   - Formularz kontaktowy (zintegrowany z systemem ticketów Weblu lub e-mail)
   - Podgląd zgłoszeń

5. **Faktury i płatności**
   - Przegląd faktur klienta
   - Statusy płatności, integracja z systemem fakturującym

6. **Powiadomienia**
   - System powiadomień dla klienta (np. o wygasaniu usług, nowych fakturach)

7. **Uprawnienia, role**
   - Panel superadmina (np. dla obsługi Weblu)
   - Widok/edycja usług wszystkich klientów

8. **Optymalizacja UX/UI**
   - Responsywność, animacje
   - Tryb ciemny/jasny

9. **Dokumentacja**
   - Rozbudowa README, opisy klas, integracji, szablonów

---

## Przykładowa struktura menu panelu

Menu panelu klienta Weblu może wyglądać następująco:

```
---------------------------------------------------------
| Logo Weblu         | Witaj, [Imię użytkownika]         |
---------------------------------------------------------
| 1. Moje usługi     | → panel-services.php              |
| 2. Dane kontaktowe | → panel-account.php               |
| 3. Faktury         | → panel-payments.php              |
| 4. Powiadomienia   | → panel-notifications.php         |
| 5. Kontakt z supportem | → panel-support.php           |
| 6. Wyloguj         | → logout link                     |
---------------------------------------------------------
```

**Podmenu / widoki dla superadmina:**
- Lista klientów i ich usług
- Zarządzanie zgłoszeniami
- Statystyki panelu
- Ustawienia globalne

---

## Kontakt

Plugin by [Blitzshadow](https://github.com/Blitzshadow)

---

**Każdy etap roadmapy może być rozwijany w osobnych gałęziach (branchach) lub jako taski/issues na GitHubie.**  
Dzięki powyższej strukturze łatwo podzielisz pracę i rozwiniesz panel w nowoczesny, profesjonalny produkt!