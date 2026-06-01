<?php
class User {

    // ↓フィールド============================
    private int $id;
    private string $name;
    private int $age;
    // ↑フィールド============================

    // コンストラクタ
    function __construct(int $id, string $name, int $age) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    // idを取得
    function getId(): int {
        return $this->id;
    }

    // 名前を変更
    function setName(string $name): void {
        $this->name = $name;
    }

    // 名前を取得
    function getName(): string {
        return $this->name;
    }

    // 年齢を変更
    function setAge(int $age): void {
        $this->age = $age;
    }

    // 年齢を取得
    function getAge(): int {
        return $this->age;
    }

    // 問題2
    function getOlder(): void {

    }
}
