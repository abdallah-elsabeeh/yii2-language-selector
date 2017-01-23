use yii;

/**
 * Description of language selector
 * this Trait change the language Yii::$app->language according to 
 * language cookies
 *
 * @author abdallah elsabeeh 
 */
trait langTrait
{

    public function init()
    {
        $cookies = Yii::$app->request->cookies;
        $lang = $cookies->getValue('lang', 'ar');
        Yii::$app->language = $cookies->getValue('lang');
    }
}
