@extends('layouts.app')

@section('title', 'ヘルプ')

@section('content')
<main class="help">
    <h2>Books Managerのご利用について</h2>
        <h3>・Books Managerの登録方法について</h3>
        <ol>
            <li>「今すぐ登録」ボタンをクリックしユーザー登録ページで必要事項を入力し「登録」を押します。</li>
            <li>「メールアドレスの確認」ページの指示に従って、登録メールアドレスに届いた「仮登録メール」にある、「Verify Email Address」をクリック。</li>
            <li>本サイトに飛び、登録が完了します。</li>
        </ol>
        <p>&nbsp;　※「仮登録メール」が届かない場合、ご利用のメールの“迷惑メールフォルダ”にメールが振り分けられている場合がございます。ご確認ください。</p>
        <h3>・パスワードを忘れてしまった場合</h3>
    <ol>
        <li>登録時のメールアドレスを入力ください。</li>
        <li>そのメールアドレス宛に再設定ページの案内をお送りします。</li>
        <li>メールの「Reset Password」ボタンをクリックし、パスワードリセットページでパスワードの再設定を行ってください。</li>
    </ol>
    <h3>・退会方法</h3>
    <ol>
        <li>設定ページにある「アカウントを削除」をクリック。</li>
        <li>確認ページでパスワードを入力し「削除する」を押すと退会することができます。</li>
    </ol>
    <h3>・登録情報の変更について</h3>
    <p>&nbsp;　設定ページにて、変更したい登録メールアドレスや名前、パスワードを入力し「更新」をクリックで変更ができます。</p>
    <h2>本の登録について</h2>
    <h3>・ISBNによる本の登録方法</h3>
    <p>&nbsp;　ホームページ右上の入力欄に本に記載されているISBNコードを入力し、簡単に本を登録することができます。</p>
    <h3>・バーコードによる本の登録方法</h3>
    <ol>
        <li>ホームページ右上にある「読み取る」ボタンをクリック。</li>
        <li>カメラが起動するのでそこにバーコードをかざすと、簡単に本を登録することができます。</li>
    </ol>
    <h3>・登録した本の編集方法</h3>
    <p>&nbsp;　編集したい本にチェックをいれ、「編集」ボタンを押すことで、タイトル名、巻号、著者の編集ができます。</p>
    <p>&nbsp;　※編集できる本は一冊ずつです。</p>
    <h3>・登録した本の削除方法</h3>
    <p>&nbsp;　削除したい本にチェックを入れ「削除」ボタンを押すことで、チェックしている本すべてを削除することができます。</p>
    <h2>本棚について</h2>
    <h3>・ソート機能について</h3>
    <p>&nbsp;　タイトル、著者の横にある三角ボタンで、昇順降順の並び替えができます。</p>
    <h3>・表示情報の変更方法</h3>
    <p>&nbsp;　右上の「歯車マーク」をクリックすると、チェックボックスが開き、タイトル、巻号、著者のうち表示したいものだけを表示することができます。</p>
</main>
@endsection
