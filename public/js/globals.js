
const colorThemes = {
  oscuro: {
      fuentePrincipal: '#ffffff',
      fuenteSecundaria: '#ffffff',
      colorPrincipal: '#474747',
      colorFondo: '#343532',
      colorHeader: '#262626',
      hoverPrincipal: '#d99923',
      hoverSecundario: '#343532',
      hoverTerciario: '#474747',
      boxShadowSubmenu: '0 0 0 transparent',
      borderCard: '1px solid transparent',
      verde: '#24c32e',
  },
  claro: {
      fuentePrincipal: '#ffffff',
      fuenteSecundaria: '#000000',
      colorPrincipal: '#ffffff',
      colorFondo: '#ffffff',
      colorHeader: '#d99923',
      hoverPrincipal: '#3B1C0D',
      hoverSecundario: '#d1d1d1',
      hoverTerciario: '#d1d1d1',
      boxShadowSubmenu: '2px 2px 5px #d1d1d1',
      borderCard: '1px solid #e7e7e7',
      verde: '#167f1d',
  },
};
  
  const button = document.getElementById('changeColorButton');
  
  button.addEventListener('click', () => {
      const currentTheme = button.value;
      const nextTheme = currentTheme === 'oscuro' ? 'claro' : 'oscuro';
    
      Object.entries(colorThemes[nextTheme]).forEach(([property, value]) => {
          document.documentElement.style.setProperty(`--${property}`, value);
      });
      button.innerHTML = '';
      if(button.value == 'claro'){
          button.innerHTML = `<i class='bx bx-sun'></i>`;
      }else{
          button.innerHTML = `<i class='bx bx-moon'></i>`;
      }
  
      button.value = nextTheme;
  });