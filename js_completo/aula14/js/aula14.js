var filho = 'Keven';
var pai = 'Luis';

if ('Keven' == filho) {
    console.log('Sim é filho!');
} else if ('Luis' == pai) {
    console.log('Sim, é pai!');
} else {
    console.log('Não são parentes!');
}

switch (pai) {
    case 'Keven':
        console.log('É o Keven');
        break;
    case 'Luis':
        console.log('É o Luis');
        break;
    default:
        console.log('Deu ruim...');
        break;
}