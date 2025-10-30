from playwright.sync_api import sync_playwright

def run(playwright):
    browser = playwright.chromium.launch()
    page = browser.new_page()

    with open('index.php', 'r') as f:
        content = f.read()

    page.set_content(content)
    page.screenshot(path='jules-scratch/verification/verification.png')
    browser.close()

with sync_playwright() as playwright:
    run(playwright)
